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

function interoFilter_outputDateField($field, $value = null)
{
    ?>
    <input type="text" class="datetime" name="interofilter_<?php echo $field['id'] ?>"
           value="<?php echo !empty($value) ? $value : '' ?>"/>
<?php
}

function interoFilter_outputNumberField($field, $value = null)
{
    ?>
    <input type="text" class="numeric" name="interofilter_<?php echo $field['id'] ?>"
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
            <option value="<?php echo $optData['value'] ?>"><?php echo $optData['title']?></option>
        <?php
        }
        ?>
    </select>
<?php
}

function interoFilter_outputForm($args)
{

    if (empty($args->query_vars['post_type']) or $args->query_vars['post_type'] != 'afisha') {
        return;
    }

    $fields = get_option('wpcf-fields');

    ?>
    <form action="" method="post" class="interofilter-form">
        <?php
        foreach ($fields as $key => $field) {
            ?>
            <div class="input">
                <label for="interofilter_<?php echo $field['id'] ?>"><?php echo $field['name'] ?>:</label>
                <?php
                switch ($field['type']) {
                    case 'select':
                        interoFilter_outputSelectField($field);
                        break;
                    case 'date':
                        interoFilter_outputDateField($field);
                        break;
                    case 'numeric':
                        interoFilter_outputNumberField($field);
                        break;
                    default:
                        interoFilter_outputTextField($field);
                }
                ?>
            </div>
        <?php
        }
        ?>
        <div class="input submit">
            <button type="submit">
                Найти
            </button>
        </div>
    </form>
<?php
}

function interoFilter_searchFilter($query)
{

    $fields = get_option('wpcf-fields');

    if (!empty($query->query) && !empty($query->query['post_type']) && $query->query['post_type'] == 'afisha') {

        if (!is_admin() /*&& $query->is_main_query()*/) {
            $metaQuery = array();
            foreach ($query->query_vars as $key => $value) {
                if (strpos($key, "interofilter_") === 0) {

                    $fieldId = str_replace("interofilter_", "", $key);
                    $fieldVal = $value;

                    $query->set("interofilter_" . $fieldId, "");

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

                    $metaQuery[] = array(
                        'key' => "wpcf-" . $fieldId,
                        'value' => $fieldVal,
                        'compare' => $compare
                    );
                }
            }
            $metaQuery['relation'] = 'AND';

            $query->set('meta_query', $metaQuery);

            if ($query->is_search) {
                //TODO
            }
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
    return $qvars;
}

add_action('pre_get_posts', 'interoFilter_searchFilter');

add_action('loop_start', 'interoFilter_outputForm');

add_filter('query_vars', 'interoFilter_addQueryvars');

wp_enqueue_style('intero-filter-style', plugins_url('jquery-ui-1.10.4.custom.min.css', __FILE__));
wp_enqueue_script('jquery-ui-datepicker');
wp_enqueue_script('intero-filter-script', plugins_url('script.js', __FILE__));