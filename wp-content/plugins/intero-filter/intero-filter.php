<?php
/*
Plugin Name: Intero filter
Plugin URI: http://www.designsandcode.com/447/wordpress-search-filter-plugin-for-taxonomies/
Description: Super easy plugin for filtering content
Author: interosite.ru
Author URI: http://www.interosite.ru/
Version: 1.0
Text Domain: interofilter
License: GPLv2
*/

function interoFilter_outputTextField($field, $value = null)
{
    ?>
    <input type="text" name="interofilter_<?php echo $field['id'] ?>"
           value="<?php echo !empty($value) ? $value : '' ?>"/>
<?php
}

function interoFilter_outputDateField($id, $value = null)
{
    ?>
    <input type="text" class="datetime" name="interofilter_<?php echo $id ?>"
           value="<?php echo !empty($value) ? $value : '' ?>"/>
<?php
}

function interoFilter_outputNumberField($id, $value = null)
{
    ?>
    <input type="text" class="numeric" name="interofilter_<?php echo $id ?>"
           value="<?php echo !empty($value) ? $value : '' ?>"/>

<?php
}

function interoFilter_outputSelectField($field, $value = null)
{
    ?>
    <select name="interofilter_<?php echo $field['id'] ?>">
        <?php
        foreach ($field['data']['options'] as $optKey => $optData) {
            if (!is_array($optData)) continue;
            ?>
            <option <?php echo $value == $optData['value'] ? 'selected="selected"' : ''?>
                value="<?php echo $optData['value'] ?>"><?php echo $optData['title']?></option>
        <?php
        }
        ?>
    </select>
<?php
}

function interoFilter_outputEmpty($args)
{
    if (empty($args->query_vars['post_type']) or $args->query_vars['post_type'] != 'afisha') {
        return;
    }

    ?>

    <h3>Нет мероприятий, удовлетворяющим условиям поиска.</h3>
    <?php
    if (!empty($_SESSION['interoFilter_session'])):
        ?>
        <p>Попробуйте <a href="#" class="clearfilter">очистить фильтр</a></p>
    <?php
    endif;
    ?>

<?php

}

function interoFilter_outputForm($args)
{

    if (empty($args->query_vars['post_type']) or $args->query_vars['post_type'] != 'afisha') {
        return;
    }

    $fields = get_option('wpcf-fields');

    ?>

    <p><strong>Куда пойти с ребенком в Челябинске?</strong> Родителей, интересующихся досугом своего малыша, предлагаем
        заглянуть на <strong>детскую афишу Челябинска</strong>. Здесь вы можете отследить премьеры, анонсы и
        мероприятия, проходящие в городе.</p>

    <p>Кроме того, здесь публикуется информация по развивающим занятиям для детей и мастер-классам для мам.</p>

    <h2 id="cal_title">Афиша Челябинска и Челябинской области</h2>

    <form action="" method="post" class="interofilter-form">

        <?php
        $field = array_key_exists('city', $fields) ? $fields['city'] : null;
        if ($field):
            ?>
            <div class="input">
                <label for="interofilter_city">Город:</label>
                <?php
                interoFilter_outputSelectField($fields['city'], $args->query_vars['interofilter_city']);
                ?>
            </div>
        <?php
        endif;
        ?>
        <div class="input">
            <label for="interofilter_date">Дата:</label>
            <?php
            interoFilter_outputDateField('date', $args->query_vars['interofilter_date']);
            ?>
        </div>
        <?php
        $field = array_key_exists('format', $fields) ? $fields['format'] : null;
        if ($field):
            ?>
            <div class="input">
                <label for="interofilter_format">Формат:</label>
                <?php
                interoFilter_outputSelectField($fields['format'], $args->query_vars['interofilter_format']);
                ?>
            </div>
        <?php
        endif;
        ?>
        <div class="input submit">
            <button type="submit">
                Найти
            </button>
        </div>
        <?php
        if (!empty($_SESSION['interoFilter_session'])):
            ?>
            <div class="input submit">
                <a href="#" class="clearfilter">
                    Очистить фильтр
                </a>
            </div>
            <input type="hidden" name="interofilter_clearfilter" value="0"/>
        <?php
        endif;
        ?>
    </form>
<?php
}

function interoFilter_sessionClear()
{
    $_SESSION['interoFilter_session'] = array();
}

function interoFilter_session($name, $value = null)
{
    if (empty($value)) {
        if (empty($_SESSION['interoFilter_session'])) {
            return null;
        }
        if (empty($_SESSION['interoFilter_session'][$name])) {
            return null;
        }
        return $_SESSION['interoFilter_session'][$name];
    } else {
        if (empty($_SESSION['interoFilter_session'])) {
            $_SESSION['interoFilter_session'] = array();
        }
        $_SESSION['interoFilter_session'][$name] = $value;
    }
}

function interoFilter_searchFilter($query)
{
    if (empty($query->query) || empty($query->query['post_type']) || $query->query['post_type'] != 'afisha') {
        return;
    }

    $fields = get_option('wpcf-fields');

    if (array_key_exists('interofilter_clearfilter', $query->query_vars) && $query->query_vars['interofilter_clearfilter'] == 1) {
        interoFilter_sessionClear();
        echo '<script> window.location="' . $_SERVER["REQUEST_URI"] . '"; </script>';
    } else {
        foreach ($fields as $fieldName => $fieldName) {
            $sessionVal = interoFilter_session($fieldName);
            if (!array_key_exists("interofilter_" . $fieldName, $query->query_vars)) {
                if (!empty($sessionVal)) {
                    $query->query_vars["interofilter_" . $fieldName] = $sessionVal;
                }
            } else {
                interoFilter_session($fieldName, $query->query_vars["interofilter_" . $fieldName]);
            }
        }
    }

    if (!is_admin() /*&& $query->is_main_query()*/) {
        $metaQuery = array();
        foreach ($query->query_vars as $key => $value) {
            if (strpos($key, "interofilter_") === 0) {

                $fieldId = str_replace("interofilter_", "", $key);
                $fieldVal = $value;

                //$query->set("interofilter_" . $fieldId, "");

                if (!array_key_exists($fieldId, $fields)) {
                    continue;
                }

                $compare = "LIKE";

                if ($fields[$fieldId]['type'] == "date") {
                    $dateInfo = date_parse($value);
                    if (!empty($dateInfo['errors'])) {
                        continue;
                    }
                    $timeStamp = mktime(0, 0, 0, $dateInfo['month'], $dateInfo['day'], $dateInfo['year']);
                    $fieldVal = $timeStamp . "";
                }

                if ($fieldId == "date") {
                    $metaQuery[] = array(
                        'key' => "wpcf-date1",
                        'value' => $fieldVal,
                        'compare' => '<='
                    );
                    $metaQuery[] = array(
                        'key' => "wpcf-date2",
                        'value' => $fieldVal,
                        'compare' => '>='
                    );
                } else {
                    $metaQuery[] = array(
                        'key' => "wpcf-" . $fieldId,
                        'value' => $fieldVal,
                        'compare' => $compare
                    );
                }

            }
        }
        $metaQuery['relation'] = 'AND';

        $query->set('meta_query', $metaQuery);

        if ($query->is_search) {
            //TODO
        }

    }
    return $query;
}

function interoFilter_addQueryvars($qvars)
{
    $fields = get_option('wpcf-fields');
    foreach ($fields as $key => $field) {
        $qvars[] = "interofilter_" . $key;
    }
    $qvars[] = "interofilter_clearfilter";
    return $qvars;
}

add_action('pre_get_posts', 'interoFilter_searchFilter');

add_filter('query_vars', 'interoFilter_addQueryvars');

wp_enqueue_style('intero-filter-style', plugins_url('jquery-ui-1.10.4.custom.min.css', __FILE__), 10);
wp_enqueue_script('jquery-ui-datepicker');
wp_enqueue_script('intero-filter-script', plugins_url('script.js', __FILE__));

add_action('init', 'myStartSession', 1);
add_action('wp_logout', 'myEndSession');
add_action('wp_login', 'myEndSession');

function myStartSession()
{
    if (!session_id()) {
        session_start();
    }
}

function myEndSession()
{
    session_destroy();
}