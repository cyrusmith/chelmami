<?php
if (! function_exists("theme_get_image_size")) {
	function theme_get_image_size(){
		$customs =  theme_get_option('image','customs');
		$sizes = array(
			"small" => __("Small",'striking_admin'),
			"medium" => __("Medium",'striking_admin'),
			"large" => __("Large",'striking_admin'),
		);
		if(!empty($customs)){
			$customs = explode(',',$customs);
			foreach($customs as $custom){
				$sizes[$custom] = ucfirst(strtolower($custom));
			}
		}
		return $sizes;
	}
}


return array(
	array(
		"name" => __("Columns",'striking_admin'),
		"value" => "columns",
		"options" => array(
			array(
				"name" => __("Type",'striking_admin'),
				"id" => "type",
				"default" => '0',
				"options" => array(
					"one_half" => __("One Half",'striking_admin'),
					"one_half_last" => __("One Half Last",'striking_admin'),
					"one_third" => __("One Third",'striking_admin'),
					"one_third_last" => __("One Third Last",'striking_admin'),
					"two_third" => __("Two Third",'striking_admin'),
					"two_third_last" => __("Two Third Last",'striking_admin'),
					"one_fourth" => __("One Fourth",'striking_admin'),
					"one_fourth_last" => __("One Fourth Last",'striking_admin'),
					"three_fourth" => __("Three Fourth",'striking_admin'),
					"three_fourth_last" => __("Three Fourth Last",'striking_admin'),
					"one_fifth" => __("One Fifth",'striking_admin'),
					"one_fifth_last" => __("One Fifth Last",'striking_admin'),
					"two_fifth" => __("Two Fifth",'striking_admin'),
					"two_fifth_last" => __("Two Fifth Last",'striking_admin'),
					"three_fifth" => __("Three Fifth",'striking_admin'),
					"three_fifth_last" => __("Three Fifth Last",'striking_admin'),		
					"four_fifth" => __("Four Fifth",'striking_admin'),
					"four_fifth_last" => __("Four Fifth Last",'striking_admin'),
					"one_sixth" => __("One Sixth",'striking_admin'),
					"one_sixth_last" => __("One Sixth Last",'striking_admin'),
					"five_sixth" => __("Five Sixth",'striking_admin'),
					"five_sixth_last" => __("Five Sixth Last",'striking_admin'),
				),
				"type" => "select",
			),
			array(
				"name" => __("Content",'striking_admin'),
				"id" => "content",
				"default" => "",
				"type" => "textarea"
			),
		),
	),
	array(
		"name" => __("Layouts",'striking_admin'),
		"value" => "layouts",
		"sub" => true,
		"options" => array(
			array(
				"name" => __("Two Column Layout",'striking_admin'),
				"value" => "one_half_layout",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_half'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_half_last'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Three Column Layout",'striking_admin'),
				"value" => "one_third_layout",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_third'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_third'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_third_last'),
						"id" => "3",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Four Column Layout",'striking_admin'),
				"value" => "one_fourth_layout",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_fourth'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_fourth'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_fourth'),
						"id" => "3",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_fourth_last'),
						"id" => "4",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Five Column Layout",'striking_admin'),
				"value" => "one_fifth_layout",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_fifth'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_fifth'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_fifth'),
						"id" => "3",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_fifth'),
						"id" => "4",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_fifth_last'),
						"id" => "5",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Six Column Layout",'striking_admin'),
				"value" => "one_sixth_layout",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_sixth'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_sixth'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_sixth'),
						"id" => "3",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_sixth'),
						"id" => "4",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_sixth'),
						"id" => "5",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_sixth_last'),
						"id" => "6",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("One Third - Two Third",'striking_admin'),
				"value" => "one_third_two_third",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_third'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'Two_third_last'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Two Third - One Third",'striking_admin'),
				"value" => "two_third_one_third",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'Two_third'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_third_last'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("One Fourth - Three Fourth",'striking_admin'),
				"value" => "one_fourth_three_fourth",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_fourth'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'Three_fourth_last'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Three Fourth - One Fourth",'striking_admin'),
				"value" => "three_fourth_one_fourth",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'Three_fourth'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_fourth_last'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("One Fourth - One Fourth - One Half",'striking_admin'),
				"value" => "one_fourth_one_fourth_one_half",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_fourth'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_fourth'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_half_last'),
						"id" => "3",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("One Fourth - One Half - One Fourth",'striking_admin'),
				"value" => "one_fourth_one_half_one_fourth",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_fourth'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_half'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_fourth_last'),
						"id" => "3",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("One Half - One Fourth - One Fourth",'striking_admin'),
				"value" => "one_half_one_fourth_one_fourth",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_half'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_fourth'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_fourth_last'),
						"id" => "3",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Four Fifth - One Fifth",'striking_admin'),
				"value" => "four_fifth_one_fifth",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'Four_fifth'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_fifth_last'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("One Fifth - Four Fifth",'striking_admin'),
				"value" => "one_fifth_four_fifth",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_fifth'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'Four_Fifth_last'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Two Fifth - Three Fifth",'striking_admin'),
				"value" => "two_fifth_three_fifth",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'Two_fifth'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'Three_Fifth_last'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Three Fifth - Two Fifth",'striking_admin'),
				"value" => "three_fifth_two_fifth",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'Three_fifth'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'Two_Fifth_last'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("One Sixth - Five Sixth",'striking_admin'),
				"value" => "one_sixth_five_sixth",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_sixth'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'Five_sixth_last'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Five Sixth - One Sixth",'striking_admin'),
				"value" => "five_sixth_one_sixth",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'Five_sixth'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_sixth_last'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("One Sixth - One Sixth - One Sixth - One Half",'striking_admin'),
				"value" => "one_sixth_one_sixth_one_sixth_one_half",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_sixth'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_sixth'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_sixth'),
						"id" => "3",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'striking_admin'),'One_half_last'),
						"id" => "4",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
		),
	),
	array(
		"name" => __("Typography",'striking_admin'),
		"value" => "typography",
		"sub" => true,
		"options" => array(
			array(
				"name" => sprintf(__("Drop Cap %s",'striking_admin'),1),
				"value" => "dropcap1",
				"options" => array (
					array(
						"name" => __("Text",'striking_admin'),
						"id" => "text",
						"default" => "",
						"type" => "text",
					),
					array(
						"name" => __("Color (optional)",'striking_admin'),
						"id" => "color",
						"default" => "",
						"prompt" => __("Choose one..",'striking_admin'),
						"options" => array(
							"black" => 'Black',
							"gray" => 'Gray',
							"red" => 'Red',
							"yellow" => 'Yellow',
							"blue" => 'Blue',
							"pink" => 'Pink',
							"green" => 'Green',
							"rosy" => 'Rosy',
							"orange" => 'Orange',
							"magenta" => 'Magenta',
						),
						"type" => "select",
					),
				)
			),
			array(
				"name" => sprintf(__("Drop Cap %s",'striking_admin'),2),
				"value" => "dropcap2",
				"options" => array (
					array(
						"name" => __("Text",'striking_admin'),
						"id" => "text",
						"default" => "",
						"type" => "text",
					),
					array(
						"name" => __("Color (optional)",'striking_admin'),
						"id" => "color",
						"default" => "",
						"prompt" => __("Choose one..",'striking_admin'),
						"options" => array(
							"black" => 'Black',
							"gray" => 'Gray',
							"red" => 'Red',
							"yellow" => 'Yellow',
							"blue" => 'Blue',
							"pink" => 'Pink',
							"green" => 'Green',
							"rosy" => 'Rosy',
							"orange" => 'Orange',
							"magenta" => 'Magenta',
						),
						"type" => "select",
					),
				)
			),
			array(
				"name" => sprintf(__("Drop Cap %s",'striking_admin'),3),
				"value" => "dropcap3",
				"options" => array (
					array(
						"name" => __("Text",'striking_admin'),
						"id" => "text",
						"default" => "",
						"type" => "text",
					),
					array(
						"name" => __("Color (optional)",'striking_admin'),
						"id" => "color",
						"default" => "",
						"prompt" => __("Choose one..",'striking_admin'),
						"options" => array(
							"black" => 'Black',
							"gray" => 'Gray',
							"red" => 'Red',
							"yellow" => 'Yellow',
							"blue" => 'Blue',
							"pink" => 'Pink',
							"green" => 'Green',
							"rosy" => 'Rosy',
							"orange" => 'Orange',
							"magenta" => 'Magenta',
						),
						"type" => "select",
					),
				)
			),
			array(
				"name" => sprintf(__("Drop Cap %s",'striking_admin'),4),
				"value" => "dropcap4",
				"options" => array (
					array(
						"name" => __("Text",'striking_admin'),
						"id" => "text",
						"default" => "",
						"type" => "text",
					),
					array(
						"name" => __("Color (optional)",'striking_admin'),
						"id" => "color",
						"default" => "",
						"prompt" => __("Choose one..",'striking_admin'),
						"options" => array(
							"black" => 'Black',
							"gray" => 'Gray',
							"red" => 'Red',
							"yellow" => 'Yellow',
							"blue" => 'Blue',
							"pink" => 'Pink',
							"green" => 'Green',
							"rosy" => 'Rosy',
							"orange" => 'Orange',
							"magenta" => 'Magenta',
						),
						"type" => "select",
					),
				)
			),
			array(
				"name" => __("Block Quotes",'striking_admin'),
				"value" => "blockquote",
				"options" => array (
					array(
						"name" => __("Align (optional)",'striking_admin'),
						"id" => "align",
						"default" => '',
						"prompt" => __("Choose one..",'striking_admin'),
						"options" => array(
							"left" => __('Left','striking_admin'),
							"right" => __('Right','striking_admin'),
							"center" => __('Center','striking_admin'),
						),
						"type" => "select",
					),
					array(
						"name" => __("Cite (optional)",'striking_admin'),
						"id" => "cite",
						"default" => "",
						"type" => "text",
					),
					array(
						"name" => __("Content",'striking_admin'),
						"id" => "content",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Pre & Code",'striking_admin'),
				"value" => "pre_code",
				"options" => array (
					array(
						"name" => __("Type",'striking_admin'),
						"id" => "type",
						"default" => 'code',
						"options" => array(
							"pre" => 'Pre',
							"code" => 'Code',
						),
						"type" => "select",
					),
					array(
						"name" => __("Content",'striking_admin'),
						"id" => "content",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Styled List",'striking_admin'),
				"value" => "styledlist",
				"options" => array (
					array(
						"name" => __("Style",'striking_admin'),
						"id" => "style",
						"default" => 'list1',
						"options" => array(
							"list1" => 'list1',
							"list2" => 'list2',
							"list3" => 'list3',
							"list4" => 'list4',
							"list5" => 'list5',
							"list6" => 'list6',
							"list7" => 'list7',
							"list8" => 'list8',
						),
						"type" => "select",
					),
					array(
						"name" => __("Color (optional)",'striking_admin'),
						"id" => "color",
						"default" => "",
						"prompt" => __("Choose one..",'striking_admin'),
						"options" => array(
							"black" => 'Black',
							"gray" => 'Gray',
							"red" => 'Red',
							"yellow" => 'Yellow',
							"blue" => 'Blue',
							"pink" => 'Pink',
							"green" => 'Green',
							"rosy" => 'Rosy',
							"orange" => 'Orange',
							"magenta" => 'Magenta',
						),
						"type" => "select",
					),
					array(
						"name" => __("Content",'striking_admin'),
						"id" => "content",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Icon Text",'striking_admin'),
				"value" => "icon",
				"options" => array (
					array(
						"name" => __("Style",'striking_admin'),
						"id" => "style",
						"default" => 'email',
						"options" => array(
							"globe" => 'globe',
							"home" => 'home',
							"email" => 'email',
							"user" => 'user',
							"multiuser" => 'multiuser',
							"id" => 'id',
							"addressbook" => 'addressbook',
							"phone" => 'phone',
							"cellphone" => 'cellphone',
							"link" => 'link',
							"chain" => 'chain',
							"calendar" => 'calendar',
							"tag" => 'tag',
							"download" => 'download',
						),
						"type" => "select",
					),
					array(
						"name" => __("Color (optional)",'striking_admin'),
						"id" => "color",
						"default" => "",
						"prompt" => __("Choose one..",'striking_admin'),
						"options" => array(
							"black" => 'Black',
							"gray" => 'Gray',
							"red" => 'Red',
							"yellow" => 'Yellow',
							"blue" => 'Blue',
							"pink" => 'Pink',
							"green" => 'Green',
							"rosy" => 'Rosy',
							"orange" => 'Orange',
							"magenta" => 'Magenta',
						),
						"type" => "select",
					),
					array(
						"name" => __("Text",'striking_admin'),
						"id" => "text",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => "Icon Link",
				"value" => "icon_link",
				"options" => array (
					array(
						"name" => __("Style",'striking_admin'),
						"id" => "style",
						"default" => 'email',
						"options" => array(
							"globe" => 'globe',
							"home" => 'home',
							"email" => 'email',
							"user" => 'user',
							"multiuser" => 'multiuser',
							"id" => 'id',
							"addressbook" => 'addressbook',
							"phone" => 'phone',
							"cellphone" => 'cellphone',
							"link" => 'link',
							"chain" => 'chain',
							"calendar" => 'calendar',
							"tag" => 'tag',
							"download" => 'download',
						),
						"type" => "select",
					),
					array(
						"name" => __("Color (optional)",'striking_admin'),
						"id" => "color",
						"default" => "",
						"prompt" => __("Choose one..",'striking_admin'),
						"options" => array(
							"black" => 'Black',
							"gray" => 'Gray',
							"red" => 'Red',
							"yellow" => 'Yellow',
							"blue" => 'Blue',
							"pink" => 'Pink',
							"green" => 'Green',
							"rosy" => 'Rosy',
							"orange" => 'Orange',
							"magenta" => 'Magenta',
						),
						"type" => "select",
					),
					array(
						"name" => __("Href",'striking_admin'),
						"id" => "href",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => __("Target (optional)",'striking_admin'),
						"id" => "target",
						"default" => '',
						"prompt" => __("Choose one..",'striking_admin'),
						"options" => array(
							"_blank" => __('Load in a new window','striking_admin'),
							"_self" => __('Load in the same frame as it was clicked','striking_admin'),
							"_parent" => __('Load in the parent frameset','striking_admin'),
							"_top" => __('Load in the full body of the window','striking_admin'),
						),
						"type" => "select",
					),
					array(
						"name" => __("Text",'striking_admin'),
						"id" => "text",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Highlight",'striking_admin'),
				"value" => "highlight",
				"options" => array (
					array(
						"name" => __("Type (optional)",'striking_admin'),
						"id" => "type",
						"default" => '',
						"prompt" => __("Choose one..",'striking_admin'),
						"options" => array(
							"light" => __("light",'striking_admin'),
							"dark" => __("dark",'striking_admin'),
						),
						"type" => "select",
					),
					array(
						"name" => __("Content",'striking_admin'),
						"id" => "content",
						"default" => "",
						"type" => "textarea"
					),
				)
			)
		),
	),
	array(
		"name" => __("Buttons",'striking_admin'),
		"value" => "buttons",
		"options" => array(
			array(
				"name" => __("Id (optional)",'striking_admin'),
				"id" => "id",
				"default" => "",
				"type" => "text",
			),
			array(
				"name" => __("Class (optional)",'striking_admin'),
				"id" => "class",
				"default" => "",
				"type" => "text",
			),
			array(
				"name" => __("Size",'striking_admin'),
				"id" => "size",
				"default" => 'medium',
				"options" => array(
					"small" => __("Small",'striking_admin'),
					"medium" => __("Medium",'striking_admin'),
					"large" => __("Large",'striking_admin'),
				),
				"type" => "select",
			),
			array(
				"name" => __("Align (optional)",'striking_admin'),
				"id" => "align",
				"default" => '',
				"prompt" => __("Choose one..",'striking_admin'),
				"options" => array(
					"left" => __('Left','striking_admin'),
					"right" => __('Right','striking_admin'),
					"center" => __('Center','striking_admin'),
				),
				"type" => "select",
			),
			array (
				"name" => __("Full",'striking_admin'),
				"id" => "full",
				"default" => false,
				"type" => "toggle"
			),
			array(
				"name" => __("Link (optional)",'striking_admin'),
				"id" => "link",
				"default" => "",
				"type" => "text",
			),
			array(
				"name" => __("Link Target (optional)",'striking_admin'),
				"id" => "linkTarget",
				"default" => '',
				"prompt" => __("Choose one..",'striking_admin'),
				"options" => array(
					"_blank" => __('Load in a new window','striking_admin'),
					"_self" => __('Load in the same frame as it was clicked','striking_admin'),
					"_parent" => __('Load in the parent frameset','striking_admin'),
					"_top" => __('Load in the full body of the window','striking_admin'),
				),
				"type" => "select",
			),
			array(
				"name" => __("Color (optional)",'striking_admin'),
				"id" => "color",
				"default" => "",
				"prompt" => __("Choose one..",'striking_admin'),
				"options" => array(
					"black" => 'Black',
					"gray" => 'Gray',
					"white" => 'White',
					"red" => 'Red',
					"yellow" => 'Yellow',
					"blue" => 'Blue',
					"pink" => 'Pink',
					"green" => 'Green',
					"rosy" => 'Rosy',
					"orange" => 'Orange',
					"magenta" => 'Magenta',
				),
				"type" => "select",
			),
			array(
				"name" => __("Background Color (optional)",'striking_admin'),
				"id" => "bgColor",
				"default" => "",
				"type" => "color"
			),
			array(
				"name" => __("Text Color (optional)",'striking_admin'),
				"id" => "textColor",
				"default" => "",
				"type" => "color"
			),
			array(
				"name" => __("Hover Background Color (optional)",'striking_admin'),
				"id" => "hoverBgColor",
				"default" => "",
				"type" => "color"
			),
			array(
				"name" => __("Hover Text Color (optional)",'striking_admin'),
				"id" => "hoverTextColor",
				"default" => "",
				"type" => "color"
			),
			array(
				"name" => __("Text",'striking_admin'),
				"id" => "text",
				"default" => "",
				"type" => "text",
			),
			array (
				"name" => __("Width (optional)",'striking_admin'),
				"id" => "width",
				"default" => '0',
				"min" => 0,
				"max" => 960,
				"step" => "1",
				"type" => "range"
			),
			
		),
	),
	array(
		"name" => __("Styled Boxes",'striking_admin'),
		"value" => "styledboxes",
		"sub" => true,
		"options" => array(
			array(
				"name" => __("Message Boxes",'striking_admin'),
				"value" => "messageboxes",
				"options" => array (
					array(
						"name" => __("Type",'striking_admin'),
						"id" => "type",
						"default" => 'info',
						"options" => array(
							"info" => __("Info",'striking_admin'),
							"success" => __("Success",'striking_admin'),
							"error" => __("Error",'striking_admin'),
							"error_msg" => __("Error Msg",'striking_admin'),
							"notice" => __("Notice",'striking_admin'),
						),
						"type" => "select",
					),
					array(
						"name" => __("Content",'striking_admin'),
						"id" => "content",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Framed Box",'striking_admin'),
				"value" => "framed_box",
				"options" => array (
					array(
						"name" => __("Content",'striking_admin'),
						"id" => "content",
						"default" => "",
						"type" => "textarea"
					),
					array (
						"name" => __("Width (optional)",'striking_admin'),
						"id" => "width",
						"default" => '0',
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"type" => "range"
					),
					array (
						"name" => __("Height (optional)",'striking_admin'),
						"id" => "height",
						"default" => '0',
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"type" => "range"
					),
					array(
						"name" => __("Background Color (optional)",'striking_admin'),
						"id" => "bgColor",
						"default" => "",
						"type" => "color"
					),
					array(
						"name" => __("Text Color (optional)",'striking_admin'),
						"id" => "textColor",
						"default" => "",
						"type" => "color"
					),
					array (
						"name" => __("Rounded",'striking_admin'),
						"id" => "rounded",
						"default" => false,
						"type" => "toggle"
					),
				)
			),
			array(
				"name" => __("Note Box",'striking_admin'),
				"value" => "note_box",
				"options" => array (
					array(
						"name" => __("title (optional)",'striking_admin'),
						"id" => "title",
						"default" => "",
						"type" => "text"
					),
					array(
						"name" => __("Content",'striking_admin'),
						"id" => "content",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" =>  __("Align (optional)",'striking_admin'),
						"id" => "align",
						"default" => '',
						"prompt" => __("Choose one..",'striking_admin'),
						"options" => array(
							"left" => __('left','striking_admin'),
							"right" => __('right','striking_admin'),
							"center" => __('center','striking_admin'),
						),
						"type" => "select",
					),
					array (
						"name" => __("Width (optional)",'striking_admin'),
						"id" => "width",
						"default" => '0',
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"type" => "range"
					),
				)
			),
		),
	),
	array(
		"name" => __("Table",'striking_admin'),
		"value" => "table",
		"options" => array(
			array(
				"name" => __("Content",'striking_admin'),
				"id" => "content",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" => __("Width",'striking_admin'),
				"desc" => __("You can use % or px as units for width",'striking_admin'),
				"id" => "width",
				"size" => 30,
				"default" => "",
				"type" => "text",
			),
		),
	),
	array(
		"name" => __("Tabs",'striking_admin'),
		"value" => "tabs",
		"options" => array(
			array(
				"name" => __("Type",'striking_admin'),
				"id" => "type",
				"default" => 'tabs',
				"options" => array(
					"tabs" => __("Framed Tabs",'striking_admin'),
					"mini_tabs" => __("Mini Tabs",'striking_admin'),
				),
				"type" => "select",
			),
			array (
				"name" => __("History (optional)",'striking_admin'),
				"desc" => __("Enable this to get browser's back and forward buttons support.",'striking_admin'),
				"id" => "history",
				"default" => false,
				"type" => "toggle"
			),
			array(
				"name" => __("Number of tabs",'striking_admin'),
				"id" => "number",
				"min" => "1",
				"max" => "8",
				"step" => "1",
				"default" => "2",
				"type" => "range"
			),
			array(
				"name" => __("Initial Tab",'striking_admin'),
				"id" => "initialTab",
				"desc" => __("Specifies the tab that is initially opened when the page loads.</br>When the history feature is enabled, this will not take effect.",'striking_admin'),
				"options" => array(),
				"default" => "0",
				"type" => "select"
			),
			array(
				"name" => sprintf(__("Tab %d Title",'striking_admin'),1),
				"id" => "title_1",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Tab %d Content",'striking_admin'),1),
				"id" => "content_1",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" =>  sprintf(__("Tab %d Title",'striking_admin'),2),
				"id" => "title_2",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Tab %d Content",'striking_admin'),2),
				"id" => "content_2",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" =>  sprintf(__("Tab %d Title",'striking_admin'),3),
				"id" => "title_3",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Tab %d Content",'striking_admin'),3),
				"id" => "content_3",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" =>  sprintf(__("Tab %d Title",'striking_admin'),4),
				"id" => "title_4",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Tab %d Content",'striking_admin'),4),
				"id" => "content_4",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" =>  sprintf(__("Tab %d Title",'striking_admin'),5),
				"id" => "title_5",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Tab %d Content",'striking_admin'),5),
				"id" => "content_5",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" => sprintf(__("Tab %d Title",'striking_admin'),6),
				"id" => "title_6",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Tab %d Content",'striking_admin'),6),
				"id" => "content_6",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" =>  sprintf(__("Tab %d Title",'striking_admin'),7),
				"id" => "title_7",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Tab %d Content",'striking_admin'),7),
				"id" => "content_7",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" =>  sprintf(__("Tab %d Title",'striking_admin'),8),
				"id" => "title_8",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Tab %d Content",'striking_admin'),8),
				"id" => "content_8",
				"default" => "",
				"type" => "textarea"
			),
		),
	),
	array(
		"name" => __("Accordion",'striking_admin'),
		"value" => "accordion",
		"options" => array(
			array(
				"name" => __("Number of pans",'striking_admin'),
				"id" => "number",
				"min" => "1",
				"max" => "8",
				"step" => "1",
				"default" => "2",
				"type" => "range"
			),
			array(
				"name" => __("Initial Tab",'striking_admin'),
				"id" => "initialTab",
				"desc" => __("Specifies the tab that is initially opened when the page loads.",'striking_admin'),
				"options" => array(),
				"default" => "0",
				"type" => "select"
			),
			array(
				"name" => sprintf(__("Accordion %d Title",'striking_admin'),1),
				"id" => "title_1",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Accordion %d Content",'striking_admin'),1),
				"id" => "content_1",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" => sprintf(__("Accordion %d Title",'striking_admin'),2),
				"id" => "title_2",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Accordion %d Content",'striking_admin'),2),
				"id" => "content_2",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" => sprintf(__("Accordion %d Title",'striking_admin'),3),
				"id" => "title_3",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Accordion %d Content",'striking_admin'),3),
				"id" => "content_3",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" => sprintf(__("Accordion %d Title",'striking_admin'),4),
				"id" => "title_4",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Accordion %d Content",'striking_admin'),4),
				"id" => "content_4",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" => sprintf(__("Accordion %d Title",'striking_admin'),5),
				"id" => "title_5",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Accordion %d Content",'striking_admin'),5),
				"id" => "content_5",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" => sprintf(__("Accordion %d Title",'striking_admin'),6),
				"id" => "title_6",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Accordion %d Content",'striking_admin'),6),
				"id" => "content_6",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" => sprintf(__("Accordion %d Title",'striking_admin'),7),
				"id" => "title_7",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Accordion %d Content",'striking_admin'),7),
				"id" => "content_7",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" => sprintf(__("Accordion %d Title",'striking_admin'),8),
				"id" => "title_8",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Accordion %d Content",'striking_admin'),8),
				"id" => "content_8",
				"default" => "",
				"type" => "textarea"
			),
		),
	),
	array(
		"name" => __("Toggle",'striking_admin'),
		"value" => "toggle",
		"options" => array(
			array(
				"name" => __("Title",'striking_admin'),
				"id" => "title",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => __("Content",'striking_admin'),
				"id" => "content",
				"default" => "",
				"type" => "textarea"
			),
		),
	),
	array(
		"name" => __("Divider",'striking_admin'),
		"value" => "divider",
		"options" => array(
			array(
				"name" => __("Type",'striking_admin'),
				"id" => "type",
				"default" => 'divider_top',
				"options" => array(
					"divider_top" => __("Divider Line With Top",'striking_admin'),
					"divider_line" => __("Divider Line",'striking_admin'),
					"divider_padding" => __("Divider Padding",'striking_admin'),
					"divider" => __("Divider Line With Padding",'striking_admin'),
					"clearboth" => __("Clear Both",'striking_admin'),
				),
				"type" => "select",
			),
		),
	),
	array(
		"name" => __("Images",'striking_admin'),
		"value" => "images",
		"sub" => true,
		"options" => array(
			array(
				"name" => __("Image",'striking_admin'),
				"value" => "image",
				"options" => array(
					array(
						"name" => __("Image Source Url",'striking_admin'),
						"id" => "src",
						"size" => 30,
						"default" => "",
						"type" => "upload",
					),
					array(
						"name" => __("Image Title (optional)",'striking_admin'),
						"id" => "title",
						"size" => 30,
						"default" => "",
						"type" => "text",
					),
					array(
						"name" => __("Align (optional)",'striking_admin'),
						"id" => "align",
						"default" => '',
						"prompt" => __("Choose one..",'striking_admin'),
						"options" => array(
							"left" => __('Left','striking_admin'),
							"right" => __('Right','striking_admin'),
							"center" => __('Center','striking_admin'),
						),
						"type" => "select",
					),
					array(
						"name" => __("Icon (optional)",'striking_admin'),
						"id" => "icon",
						"default" => '',
						"prompt" => __("Choose one..",'striking_admin'),
						"options" => array(
							"zoom" => __('Zoom','striking_admin'),
							"play" => __('Play','striking_admin'),
							"doc" => __('Doc','striking_admin'),
							"link" => __('Link','striking_admin'),
						),
						"type" => "select",
					),
					array (
						"name" => __("Lightbox",'striking_admin'),
						"id" => "lightbox",
						"default" => false,
						"type" => "toggle"
					),
					array (
						"name" => __("Lightbox group (optional)",'striking_admin'),
						"id" => "group",
						"default" => '',
						"type" => "text"
					),
					array(
						"name" => __("Size (optional)",'striking_admin'),
						"id" => "size",
						"default" => '',
						"prompt" => __("Choose one..",'striking_admin'),
						"options" => theme_get_image_size(),
						"type" => "select",
					),
					array (
						"name" => __("Width (optional)",'striking_admin'),
						"id" => "width",
						"default" => 0,
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"type" => "range"
					),
					array (
						"name" => __("Height (optional)",'striking_admin'),
						"id" => "height",
						"default" => 0,
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"type" => "range"
					),
					array (
						"name" => __("Auto adjust Height",'striking_admin'),
						"id" => "autoHeight",
						"default" => false,
						"type" => "toggle"
					),
					array(
						"name" => __("Link (optional)",'striking_admin'),
						"size" => 30,
						"id" => "link",
						"default" => "",
						"type" => "text",
					),
					array(
						"name" => __("Link Target (optional)",'striking_admin'),
						"id" => "linkTarget",
						"default" => '',
						"prompt" => __("Choose one..",'striking_admin'),
						"options" => array(
							"_blank" => __('Load in a new window','striking_admin'),
							"_self" => __('Load in the same frame as it was clicked','striking_admin'),
							"_parent" => __('Load in the parent frameset','striking_admin'),
							"_top" => __('Load in the full body of the window','striking_admin'),
						),
						"type" => "select",
					),
					array (
						"name" => __("Quality (optional)",'striking_admin'),
						"id" => "quality",
						"default" => 75,
						"min" => 75,
						"max" => 100,
						"step" => "1",
						"type" => "range"
					),
				),
			),
			array(
				"name" => __("Picture Frame",'striking_admin'),
				"value" => "picture_frame",
				"options" => array(
					array(
						"name" => __("Image Source Url",'striking_admin'),
						"id" => "src",
						"size" => 30,
						"default" => "",
						"type" => "upload",
					),
					array(
						"name" => __("Image Title (optional)",'striking_admin'),
						"id" => "title",
						"size" => 30,
						"default" => "",
						"type" => "text",
					),
				),
			),
		),
	),
	array(
		"name" => __("iFrame",'striking_admin'),
		"value" => "iframe",
		"options" => array(
			array(
				"name" => __("Src",'striking_admin'),
				"id" => "src",
				"size" => 30,
				"default" => "",
				"type" => "text",
			),
			array(
				"name" => __("Width",'striking_admin'),
				"desc" => __("You can use % or px as units for width",'striking_admin'),
				"id" => "width",
				"size" => 30,
				"default" => "",
				"type" => "text",
			),
			array(
				"name" => __("Height",'striking_admin'),
				"desc" => __("You can use % or px as units for height",'striking_admin'),
				"id" => "height",
				"size" => 30,
				"default" => "",
				"type" => "text",
			),
		),
	),
	array(
		"name" => __("Google Map",'striking_admin'),
		"value" => "gmap",
		"options" => array(
			array (
				"name" => __("Width (optional)",'striking_admin'),
				"desc" => __("set to 0 is the full width",'striking_admin'),
				"id" => "width",
				"default" => 0,
				"min" => 0,
				"max" => 960,
				"step" => "1",
				"type" => "range"
			),
			array (
				"name" => __("Height",'striking_admin'),
				"id" => "height",
				"default" => '400',
				"min" => 0,
				"max" => 960,
				"step" => "1",
				"type" => "range"
			),
			array(
				"name" => __("Address (optional)",'striking_admin'),
				"id" => "address",
				"size" => 30,
				"default" => "",
				"type" => "text",
			),
			array(
				"name" => __("Latitude",'striking_admin'),
				"id" => "latitude",
				"size" => 30,
				"default" => "",
				"type" => "text",
			),
			array(
				"name" => __("longitude",'striking_admin'),
				"id" => "longitude",
				"size" => 30,
				"default" => "",
				"type" => "text",
			),
			array (
				"name" => __("Zoom",'striking_admin'),
				"id" => "zoom",
				"default" => '14',
				"min" => 1,
				"max" => 19,
				"step" => "1",
				"type" => "range"
			),
			array (
				"name" => __("Marker",'striking_admin'),
				"id" => "marker",
				"default" => true,
				"type" => "toggle"
			),
			array (
				"name" => __("Html",'striking_admin'),
				"id" => "html",
				"size" => 30,
				"default" => "",
				"type" => "text",
			),
			array (
				"name" => __("Popup Marker",'striking_admin'),
				"id" => "popup",
				"default" => false,
				"type" => "toggle"
			),
			array (
				"name" => __("Controls (optional)",'striking_admin'),
				"id" => "controls",
				"size" => 30,
				"default" => "",
				"type" => "text",
			),
			array (
				"name" => __("Scrollwheel",'striking_admin'),
				"id" => "scrollwheel",
				"default" => false,
				"type" => "toggle"
			),
			array(
				"name" => __("Maptype (optional)",'striking_admin'),
				"id" => "maptype",
				"default" => 'G_NORMAL_MAP',
				"prompt" => __("Choose one..",'striking_admin'),
				"options" => array(
					"G_NORMAL_MAP" => __('Default road map','striking_admin'),
					"G_SATELLITE_MAP" => __('Google Earth satellite','striking_admin'),
					"G_HYBRID_MAP" => __('Mixture of normal and satellite','striking_admin'),
					"G_DEFAULT_MAP_TYPES" => __('Mixture of above three maps','striking_admin'),
					"G_PHYSICAL_MAP" => __('Physical map','striking_admin'),
				),
				"type" => "select",
			),
		),
	),
	array(
		"name" => __("Widget",'striking_admin'),
		"value" => "widget",
		"sub" => true,
		"options" => array(
			array(
				"name" => __("Contact Form",'striking_admin'),
				"value" => "contactform",
				"options" => array (
					array(
						"name" => __("email",'striking_admin'),
						"id" => "email",
						"default" => "",
						"type" => "text"
					),
					array(
						"name" => __("Success Text",'striking_admin'),
						"id" => "content",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => __("Background Color (optional)",'striking_admin'),
						"id" => "bgColor",
						"default" => "",
						"type" => "color"
					),
					array(
						"name" => __("Text Color (optional)",'striking_admin'),
						"id" => "textColor",
						"default" => "",
						"type" => "color"
					),
				)
			),
			array(
				"name" => __("Twitter",'striking_admin'),
				"value" => "twitter",
				"options" => array (
					array(
						"name" => __("Username",'striking_admin'),
						"desc" => __("Use ',' separate multi user.<br> (e.g <code>user1,user2</code>)",'striking_admin'),
						"id" => "username",
						"default" => "",
						"type" => "text"
					),
					array(
						"name" => __("Count",'striking_admin'),
						"desc" => "",
						"id" => "count",
						"default" => '4',
						"min" => 0,
						"max" => 20,
						"step" => "1",
						"type" => "range"
					),
					array(
						"name" => __("Avatar Size (optional)",'striking_admin'),
						"desc" => __("Height and width of avatar if displayed",'striking_admin'),
						"id" => "avatarSize",
						"default" => '0',
						"min" => 0,
						"max" => 48,
						"step" => "1",
						"type" => "range"
					),
					array(
						"name" => __("Query (optional)",'striking_admin'),
						"desc" => __("uses <a href='http://apiwiki.twitter.com/Twitter-Search-API-Method%3A-search' target='_blank'>Twitter's Search API</a>, so you can display any tweets you like.", 'striking_admin'),
						"id" => "query",
						"default" => '',
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Flickr",'striking_admin'),
				"value" => "flickr",
				"options" => array (
					array(
						"name" => __("Type",'striking_admin'),
						"id" => "type",
						"default" => 'page',
						"options" => array(
							"user" => __("User",'striking_admin'),
							"group" => __("Group",'striking_admin'),
						),
						"type" => "select",
					),
					array(
						"name" => __("Flickr id (<a href='http://idgettr.com/' target='_blank'>idGettr</a>)",'striking_admin'),
						"id" => "id",
						"default" => "",
						"type" => "text"
					),
					array(
						"name" => __("Count",'striking_admin'),
						"desc" => "",
						"id" => "count",
						"default" => '4',
						"min" => 0,
						"max" => 20,
						"step" => "1",
						"type" => "range"
					),
					array(
						"name" => __("Display",'striking_admin'),
						"id" => "display",
						"default" => 'latest',
						"options" => array(
							"latest" => __('Latest','striking_admin'),
							"random" => __('Random','striking_admin'),
						),
						"type" => "select",
					),
				)
			),
			array(
				"name" => __("Contact Info",'striking_admin'),
				"value" => "contact_info",
				"options" => array (
					array(
						"name" => __("Color (optional)",'striking_admin'),
						"id" => "color",
						"default" => "",
						"prompt" => __("Choose one..",'striking_admin'),
						"options" => array(
							"black" => 'Black',
							"gray" => 'Gray',
							"red" => 'Red',
							"yellow" => 'Yellow',
							"blue" => 'Blue',
							"pink" => 'Pink',
							"green" => 'Green',
							"rosy" => 'Rosy',
							"orange" => 'Orange',
							"magenta" => 'Magenta',
						),
						"type" => "select",
					),
					array(
						"name" => __("Phone",'striking_admin'),
						"id" => "phone",
						"default" => "",
						"size" => 30,
						"type" => "text"
					),
					array(
						"name" => __("Cell Phone",'striking_admin'),
						"id" => "cellphone",
						"default" => "",
						"size" => 30,
						"type" => "text"
					),
					array(
						"name" => __("email",'striking_admin'),
						"id" => "email",
						"default" => "",
						"type" => "text"
					),
					array(
						"name" => __("link",'striking_admin'),
						"id" => "link",
						"default" => "",
						"type" => "text"
					),
					array(
						"name" => __("Address",'striking_admin'),
						"id" => "address",
						"default" => "",
						"size" => 30,
						"type" => "text"
					),
					array(
						"name" => __("City",'striking_admin'),
						"id" => "city",
						"default" => "",
						"size" => 30,
						"type" => "text"
					),
					array(
						"name" => __("State",'striking_admin'),
						"id" => "state",
						"default" => "",
						"size" => 30,
						"type" => "text"
					),
					array(
						"name" => __("Zip",'striking_admin'),
						"id" => "zip",
						"default" => "",
						"size" => 30,
						"type" => "text"
					),
					array(
						"name" => __("Name",'striking_admin'),
						"id" => "name",
						"default" => "",
						"size" => 30,
						"type" => "text"
					),
				)
			),
			array(
				"name" => __("Popular Posts",'striking_admin'),
				"value" => "popular_posts",
				"options" => array (
					array(
						"name" => __("Count",'striking_admin'),
						"desc" => "",
						"id" => "count",
						"default" => '4',
						"min" => 0,
						"max" => 20,
						"step" => "1",
						"type" => "range"
					),
					array(
						"name" => __("Thumbnail",'striking_admin'),
						"id" => "thumbnail",
						"default" => true,
						"type" => "toggle"
					),
					array(
						"name" => __("Extra infomation type",'striking_admin'),
						"id" => "extra",
						"default" => 'desc',
						"options" => array(
							"time" => __('Time','striking_admin'),
							"desc" => __('Description','striking_admin'),
							"none" => __('None','striking_admin'),
						),
						"type" => "select",
					),
					array(
						"name" => __("Length of Description",'striking_admin'),
						"desc" => "",
						"id" => "desc_length",
						"default" => '80',
						"min" => 0,
						"max" => 200,
						"step" => "1",
						"type" => "range"
					),
					array(
						"name" => __("Category (optional)",'striking_admin'),
						"id" => "cat",
						"default" => array(),
						"target" => 'cat',
						"type" => "multiselect",
					),
				)
			),
			array(
				"name" => __("Recent Posts",'striking_admin'),
				"value" => "recent_posts",
				"options" => array (
					array(
						"name" => __("Count",'striking_admin'),
						"desc" => "",
						"id" => "count",
						"default" => '4',
						"min" => 0,
						"max" => 20,
						"step" => "1",
						"type" => "range"
					),
					array(
						"name" => __("Thumbnail",'striking_admin'),
						"id" => "thumbnail",
						"default" => true,
						"type" => "toggle"
					),
					array(
						"name" => __("Extra infomation type",'striking_admin'),
						"id" => "extra",
						"default" => 'desc',
						"options" => array(
							"time" => __('Time','striking_admin'),
							"desc" => __('Description','striking_admin'),
							"none" => __('None','striking_admin'),
						),
						"type" => "select",
					),
					array(
						"name" => __("Length of Description",'striking_admin'),
						"desc" => "",
						"id" => "desc_length",
						"default" => '80',
						"min" => 0,
						"max" => 200,
						"step" => "1",
						"type" => "range"
					),
					array(
						"name" => __("Category (optional)",'striking_admin'),
						"id" => "cat",
						"default" => array(),
						"target" => 'cat',
						"type" => "multiselect",
					),
				)
			),
		),
	),
	array(
		"name" => __("Video",'striking_admin'),
		"value" => "video",
		"sub" => true,
		"options" => array(
			array(
				"name" => "Html5",
				"value" => "html5",
				"options" => array(
					array(
						"name" => __("Poster Image",'striking_admin'),
						"desc" => __("The poster image is placeholder for the video before it plays. It's also used as the image fallback for devices that don't support HTML5 Video or Flash. ",'striking_admin'),
						"id" => "poster",
						"size" => 30,
						"default" => "",
						"type" => "text",
					),
					array(
						"name" => __("MP4 Source",'striking_admin'),
						"desc" => __("Supported by Webkit browsers (Safari, Chrome, iPhone/iPad) and Internet Explorer 9. Also supported by Flash 9 and higher, so can double as the Flash source.",'striking_admin'),
						"id" => "mp4",
						"size" => 30,
						"default" => "",
						"type" => "text",
					),
					array(
						"name" => __("WebM Source",'striking_admin'),
						"desc" => __("Supported by newer versions of Firefox, Chrome, and Opera."),
						"id" => "webm",
						"size" => 30,
						"default" => "",
						"type" => "text",
					),
					array(
						"name" => __("Ogg Source",'striking_admin'),
						"desc" => __("Supported by Firefox, Opera, Chrome, and newer versions of Safari. Unfortunately it's not as good as WebM and MP4.",'striking_admin'),
						"id" => "ogg",
						"size" => 30,
						"default" => "",
						"type" => "text",
					),
					array (
						"name" => __("Width",'striking_admin'),
						"id" => "width",
						"default" => 0,
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"type" => "range"
					),
					array (
						"name" => __("Height",'striking_admin'),
						"id" => "height",
						"default" => 0,
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"type" => "range"
					),
					array(
						"name" => __("Download Links",'striking_admin'),
						"id" => "download",
						"desc" => __("If you want to support devices that don't support HTML5 or Flash, include links to the video source.",'striking_admin'),
						"default" => 'default',
						"type" => "tritoggle"
					),
					array(
						"name" => __("Preload",'striking_admin'),
						"id" => "preload",
						"desc" => __("Select this if you want the video to start downloading as soon the user loads the page.",'striking_admin'),
						"default" => 'default',
						"type" => "tritoggle"
					),
					array(
						"name" => __("Autoplay",'striking_admin'),
						"id" => "autoplay",
						"desc" => __("Select this if you want the video to start playing as soon as the page is loaded.",'striking_admin'),
						"default" => 'default',
						"type" => "tritoggle"
					),
				),
			),
			array(
				"name" => "Flash",
				"value" => "flash",
				"options" => array(
					array(
						"name" => __("Src",'striking_admin'),
						"desc" => __('Specifies the location (URL) of the movie to be loaded','striking_admin'),
						"id" => "src",
						"size" => 30,
						"default" => "",
						"type" => "text",
					),
					array(
						"name" => __("Id (optional)",'striking_admin'),
						"id" => "id",
						"default" => "",
						"type" => "text",
					),
					array (
						"name" => __("Width (optional)",'striking_admin'),
						"id" => "width",
						"default" => 0,
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"type" => "range"
					),
					array (
						"name" => __("Height (optional)",'striking_admin'),
						"id" => "height",
						"default" => 0,
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"type" => "range"
					),
					array(
						"name" => __("Play",'striking_admin'),
						"id" => "play",
						"desc" => __("Specifies whether the movie begins playing immediately on loading in the browser.",'striking_admin'),
						"default" => false,
						"type" => "toggle"
					),
					array(
						"name" => __("flashvars (optional)",'striking_admin'),
						"desc" => __("variable to pass to Flash Player.",'striking_admin'),
						"id" => "flashvars",
						"size" => 30,
						"default" => "",
						"type" => "text",
					),
				),
			),
			array(
				"name" => "YouTube",
				"value" => "youtube",
				"options" => array(
					array(
						"name" => __("Clip_id",'striking_admin'),
						"desc" => __("the id from the clip's URL after v= (e.g. http://www.youtube.com/watch?v=<span style='color:red'>2DclLrdaxQd</span>)",'striking_admin'),
						"id" => "clip_id",
						"size" => 30,
						"default" => "",
						"type" => "text",
					),
					array (
						"name" => __("Width (optional)",'striking_admin'),
						"id" => "width",
						"default" => 0,
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"type" => "range"
					),
					array (
						"name" => __("Height (optional)",'striking_admin'),
						"id" => "height",
						"default" => 0,
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"type" => "range"
					),
					array(
						"name" => __("Autohide",'striking_admin'),
						"desc" => __('Set whether the video controls will automatically hide after a video begins playing.','striking_admin'),
						"id" => "autohide",
						"default" => 'default',
						"options" => array(
							"default"  => __('Default','striking_admin'),
							"0" => __('Visible','striking_admin'),
							"1" => __('Hide all','striking_admin'),
							"2" => __('Hide video progress bar','striking_admin'),
						),
						"type" => "select",
					),
					array(
						"name" => __("Autoplay",'striking_admin'),
						"desc" => __('Sets whether or not the initial video will autoplay when the player loads','striking_admin'),
						"id" => "autoplay",
						"default" => 'default',
						"type" => "tritoggle"
					),
					array(
						"name" => __("Controls",'striking_admin'),
						"desc" => __('Sets whether or not display the video player controls.','striking_admin'),
						"id" => "controls",
						"default" => 'default',
						"type" => "tritoggle"
					),
					array(
						"name" => __("Disablekb",'striking_admin'),
						"desc" => __('Enable it will disable the player keyboard controls.','striking_admin'),
						"id" => "disablekb",
						"default" => 'default',
						"type" => "tritoggle"
					),
					array(
						"name" => __("Fs",'striking_admin'),
						"desc" => __('Sets whether or not enable the fullscreen button.','striking_admin'),
						"id" => "fs",
						"default" => 'default',
						"type" => "tritoggle"
					),
					array(
						"name" => __("Hd",'striking_admin'),
						"desc" => __('Sets whether or not enable HD version of the video.','striking_admin'),
						"id" => "hd",
						"default" => 'default',
						"type" => "tritoggle"
					),
					array(
						"name" => __("Loop",'striking_admin'),
						"desc" => __('Enable it will will cause the player to play the initial video again and again.','striking_admin'),
						"id" => "loop",
						"default" => 'default',
						"type" => "tritoggle"
					),
					array(
						"name" => __("Rel",'striking_admin'),
						"desc" => __('Sets whether the player should load related videos once playback of the initial video starts.','striking_admin'),
						"id" => "rel",
						"default" => 'default',
						"type" => "tritoggle"
					),
					array(
						"name" => __("showinfo",'striking_admin'),
						"desc" => __('Enable it will will cause the player to play the initial video again and again.','striking_admin'),
						"id" => "showinfo",
						"default" => 'default',
						"type" => "tritoggle"
					),
					array(
						"name" => __("showsearch",'striking_admin'),
						"desc" => __('Sets whether or not display search box from displaying when the video is minimized','striking_admin'),
						"id" => "showsearch",
						"default" => 'default',
						"type" => "tritoggle"
					),
				),
			),
			array(
				"name" => "Vimeo",
				"value" => "vimeo",
				"options" => array(
					array(
						"name" => __("Clip_id",'striking_admin'),
						"desc" => __("the number from the clip's URL (e.g. http://vimeo.com/<span style='color:red'>123456</span>)",'striking_admin'),
						"id" => "clip_id",
						"size" => 30,
						"default" => "",
						"type" => "text",
					),
					array (
						"name" => __("Width (optional)",'striking_admin'),
						"id" => "width",
						"default" => 0,
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"type" => "range"
					),
					array (
						"name" => __("Height (optional)",'striking_admin'),
						"id" => "height",
						"default" => 0,
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"type" => "range"
					),
					array(
						"name" => __("Byline",'striking_admin'),
						"desc" => __('Sets whether or not show the byline on the video','striking_admin'),
						"id" => "byline",
						"default" => 'default',
						"type" => "tritoggle"
					),
					array(
						"name" => __("Title",'striking_admin'),
						"desc" => __('Sets whether or not show the title on the video','striking_admin'),
						"id" => "title",
						"default" => 'default',
						"type" => "tritoggle"
					),
					array(
						"name" => __("Portrait",'striking_admin'),
						"desc" => __("Sets whether or not show the user's portrai on the video",'striking_admin'),
						"id" => "portrait",
						"default" => 'default',
						"type" => "tritoggle"
					),
					array(
						"name" => __("Autoplay",'striking_admin'),
						"desc" => __("Sets whether or not automatically start playback of the video.",'striking_admin'),
						"id" => "autoplay",
						"default" => 'default',
						"type" => "tritoggle"
					),
					array(
						"name" => __("Loop",'striking_admin'),
						"desc" => __('Sets whether or not play the initial video again and again.','striking_admin'),
						"id" => "loop",
						"default" => 'default',
						"type" => "tritoggle"
					),
				),
			),
			array(
				"name" => "Dailymotion",
				"value" => "dailymotion",
				"options" => array(
					array(
						"name" => __("Clip_id",'striking_admin'),
						"desc" => __("the id from the clip's URL (e.g. http://www.dailymotion.com/video/<span style='color:red'>xf3fk2</span>_didacticiel-quicklist_tech)",'striking_admin'),
						"id" => "clip_id",
						"size" => 30,
						"default" => "",
						"type" => "text",
					),
					array (
						"name" => __("Width (optional)",'striking_admin'),
						"id" => "width",
						"default" => 0,
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"type" => "range"
					),
					array (
						"name" => __("Height (optional)",'striking_admin'),
						"id" => "height",
						"default" => 0,
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"type" => "range"
					),
					array(
						"name" => __("Related",'striking_admin'),
						"desc" => __("Sets whether or not loads related videos when the current video begins playback.",'striking_admin'),
						"id" => "related",
						"default" => 'default',
						"type" => "tritoggle"
					),
					array(
						"name" => __("Autoplay",'striking_admin'),
						"desc" => __("Sets whether or not automatically start playback of the video.",'striking_admin'),
						"id" => "autoplay",
						"default" => 'default',
						"type" => "tritoggle"
					),
					array(
						"name" => __("Chromeless",'striking_admin'),
						"desc" => __("Sets whether or not display controls or not during video playback.",'striking_admin'),
						"id" => "chromeless",
						"default" => 'default',
						"type" => "tritoggle"
					),
				),
			),
		),
	),
	array(
		"name" => __("Slideshow",'striking_admin'),
		"value" => "slideshow",
		"sub" => true,
		"options" => array(
			array(
				"name" => "Nivo",
				"value" => "nivo",
				"options" => array(
					array(
						"name" => __("SlideShow Category (optional)",'striking_admin'),
						"desc" => __("Select which SlideShow Category to show.",'striking_admin'),
						"id" => "category",
						"target" => "slideshow_category",
						"default" => "",
						"prompt" => __("None",'striking_admin'),
						"type" => "select",
					),
					array(
						"name" => __("Number (optional)",'striking_admin'),
						"desc" => __("Sets the number of images to display.<br> 0: Display all images.",'striking_admin'),
						"id" => "number",
						"default" => '0',
						"min" => 0,
						"max" => 20,
						"step" => "1",
						"type" => "range"
					),
					/*array(
						"name" => __("Images Srcs (optional)",'striking_admin'),
						"id" => "content",
						"default" => "",
						"type" => "textarea"
					),*/
					array(
						"name" => __("Width",'striking_admin'),
						"desc" => __("Width of slider.",'striking_admin'),
						"id" => "width",
						"min" => "10",
						"max" => "960",
						"step" => "1",
						"unit" => 'px',
						"default" => "630",
						"type" => "range"
					),
					array(
						"name" => __("Height",'striking_admin'),
						"desc" => __("Height of slider.",'striking_admin'),
						"id" => "height",
						"min" => "10",
						"max" => "1000",
						"step" => "1",
						"unit" => 'px',
						"default" => "300",
						"type" => "range"
					),
					array(
						"name" => __("Transition Effects",'striking_admin'),
						"desc" => __("Select which effect to use on the slideshow.",'striking_admin'),
						"id" => "effect",
						"default" => 'random',
						"options" => array(
							"random" => 'random',
							"sliceDown" => 'sliceDown',
							"sliceDownLeft" => 'sliceDownLeft',
							"sliceUp" => 'sliceUp',
							"sliceUpLeft" => 'sliceUpLeft',
							"sliceUpDown" => 'sliceUpDown',
							"sliceUpDownLeft" => 'sliceUpDownLeft',
							"fold" => 'fold',
							"fade" => 'fade',
							'slideInRight' => 'slideInRight',
							'slideInLeft' => 'slideInLeft',
							'boxRandom' => 'boxRandom',
							'boxRain' => 'boxRain',
							'boxRainReverse' => 'boxRainReverse',
							'boxRainGrow' => 'boxRainGrow',
							'boxRainGrowReverse' => 'boxRainGrowReverse',
						),
						"type" => "select",
					),
					array(
						"name" => __("Segments",'striking_admin'),
						"desc" => __("Number of segments in which the image will be sliced for slice animations.",'striking_admin'),
						"id" => "slices",
						"min" => "1",
						"max" => "30",
						"step" => "1",
						"default" => "10",
						"type" => "range"
					),
					array(
						"name" => __("Box Columns",'striking_admin'),
						"desc" => __("Number of Columns in which the image will be sliced for box animations.",'striking_admin'),
						"id" => "boxCols",
						"min" => "1",
						"max" => "30",
						"step" => "1",
						"default" => "8",
						"type" => "range"
					),
					array(
						"name" => __("Box Rows",'striking_admin'),
						"desc" => __("Number of Rows in which the image will be sliced for box animations.",'striking_admin'),
						"id" => "boxRows",
						"min" => "1",
						"max" => "30",
						"step" => "1",
						"default" => "4",
						"type" => "range"
					),
					array(
						"name" => __("Animation Speed",'striking_admin'),
						"desc" => __("Define the duration of the animations.",'striking_admin'),
						"id" => "animSpeed",
						"min" => "200",
						"max" => "3000",
						"step" => "100",
						'unit' => 'miliseconds',
						"default" => "500",
						"type" => "range"
					),
					array(
						"name" => __("Pause Time",'striking_admin'),
						"desc" => __("Define the delay which each slide will have to wait to be played",'striking_admin'),
						"id" => "pauseTime",
						"min" => "1000",
						"max" => "30000",
						"step" => "500",
						"unit" => 'miliseconds',
						"default" => "3000",
						"type" => "range"
					),
					array(
						"name" => __("Control Navigation",'striking_admin'),
						"desc" => __("If you want show Control Navigation on the slidershow, turn on the button.",'striking_admin'),
						"id" => "controlNav",
						"default" => true,
						"type" => "toggle"
					),
					array(
						"name" => __("Pause On Hover",'striking_admin'),
						"desc" => __("If you want stop animation while hovering, turn on the button.",'striking_admin'),
						"id" => "pauseOnHover",
						"default" => true,
						"type" => "toggle"
					),
					array(
						"name" => __("Caption",'striking_admin'),
						"desc" => __("If you want display the title of slider item, turn on the button.",'striking_admin'),
						"id" => "caption",
						"default" => false,
						"type" => "toggle"
					),
				),
			),
		),
	),
	array(
		"name" => "Lightbox",
		"value" => "lightbox",
		"options" => array(
			array(
				"name" => __("Content",'striking_admin'),
				"id" => "content",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" => __("Href",'striking_admin'),
				"id" => "href",
				"size" => 30,
				"default" => "",
				"type" => "text",
			),
			array(
				"name" => __("Title",'striking_admin'),
				"desc" => __("The title you want to display on the bottom of the lightbox.",'striking_admin'),
				"id" => "title",
				"size" => 30,
				"default" => "",
				"type" => "text",
			),
			array (
				"name" => __("Group (optional)",'striking_admin'),
				"desc" => __("This allows the user to group any combination of elements together for a gallery.",'striking_admin'),
				"id" => "group",
				"default" => '',
				"type" => "text"
			),
			array(
				"name" => __("Width (optional)",'striking_admin'),
				"desc" => __("Set a width. Example: '100%', '500px', or 500",'striking_admin'),
				"id" => "width",
				"size" => 30,
				"default" => "",
				"type" => "text",
			),
			array(
				"name" => __("Height (optional)",'striking_admin'),
				"desc" => __("Set a height. Example: '100%', '500px', or 500",'striking_admin'),
				"id" => "height",
				"size" => 30,
				"default" => "",
				"type" => "text",
			),
			array(
				"name" => __("Iframe",'striking_admin'),
				"id" => "iframe",
				"desc" => __("If 'true' specifies that content should be displayed in an iFrame.",'striking_admin'),
				"default" => false,
				"type" => "toggle"
			),
			array(
				"name" => __("Photo",'striking_admin'),
				"id" => "photo",
				"desc" => __("If true, this setting forces Lightbox to display a link as a photo. Use this when automatic photo detection fails (such as using a url like 'photo.php' instead of 'photo.jpg', 'photo.jpg#1', or 'photo.jpg?pic=1')",'striking_admin'),
				"default" => false,
				"type" => "toggle"
			),
			array(
				"name" => __("Inline",'striking_admin'),
				"id" => "inline",
				"desc" => __("If 'true' lightbox can be used to display content from the inline html. ",'striking_admin'),
				"default" => false,
				"type" => "toggle"
			),
			array(
				"name" => __("Inline Id",'striking_admin'),
				"desc" => __('unique id for inline content.','striking_admin'),
				"id" => "inline_id",
				"default" => '',
				"type" => "text"
			),
			array(
				"name" => __("Inline Html",'striking_admin'),
				"desc" => __('You can use shortcode here.','striking_admin'),
				"id" => "inline_html",
				"default" => '',
				"type" => "textarea"
			),
			array (
				"name" => __("Display Close Button",'striking_admin'),
				"id" => "close",
				"default" => true,
				"type" => "toggle"
			),
		),
	),
	array(
		"name" => "Google chart",
		"value" => "chart",
		"options" => array(
			array(
				"name" => "data",		
				"id" => "data",
				"default" => "",
				"rows" => "2",
				"type" => "textarea"
			),
			array(
				"name" => "labels",		
				"id" => "labels",
				"default" => "",
				"rows" => "2",
				"type" => "textarea"
			),
			array(
				"name" => "colors",		
				"id" => "colors",
				"default" => "",
				"rows" => "2",
				"type" => "textarea"
			),
			array(
				"name" => "bg",
				"id" => "bg",
				"size" => 30,
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => "size",		
				"id" => "size",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => "title",		
				"id" => "title",
				"size" => 30,
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => "type",		
				"id" => "type",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => "advanced",		
				"id" => "advanced",
				"default" => "",
				"type" => "textarea"
			),
		),
	),
	array(
		"name" => __("Portfolio",'striking_admin'),
		"value" => "portfolio",
		"options" => array(
			array(
				"name" => __("Column",'striking_admin'),
				"id" => "column",
				"default" => '4',
				"options" => array(
					"1" => sprintf(__("%d Column",'striking_admin'),1),
					"2" => sprintf(__("%d Columns",'striking_admin'),2),
					"3" => sprintf(__("%d Columns",'striking_admin'),3),
					"4" => sprintf(__("%d Columns",'striking_admin'),4),
				),
				"type" => "select",
			),
			array (
				"name" => __("Height (optional)",'striking_admin'),
				"desc" => __("The height of thumbnail image.",'striking_admin'),
				"id" => "height",
				"default" => 0,
				"min" => 0,
				"max" => 960,
				"unit" => 'px',
				"step" => "1",
				"type" => "range"
			),
			array(
				"name" => __("No Paging",'striking_admin'),
				"id" => "nopaging",
				"desc" => __("If the option is on, it will disable pagination, displaying all posts",'striking_admin'),
				"default" => false,
				"type" => "toggle"
			),
			array(
				"name" => __("Max",'striking_admin'),
				"desc" => __("Number of item to show per page",'striking_admin'),
				"id" => "max",
				"default" => '-1',
				"min" => -1,
				"max" => 50,
				"step" => "1",
				"type" => "range"
			),
			array(
				"name" => __("Sortable",'striking_admin'),
				"id" => "sortable",
				"desc" => __("If the option is on, it will disable pagination, displaying all posts by category with sortable.",'striking_admin'),
				"default" => false,
				"type" => "toggle"
			),
			array(
				"name" => __("Category (optional)",'striking_admin'),
				"id" => "cat",
				"default" => array(),
				"target" => 'portfolio_category',
				"type" => "multiselect",
			),
			array(
				"name" => __("Ids (optional)",'striking_admin'),
				"desc" => __("The specific portfolios you want to display",'striking_admin'),
				"id" => "ids",
				"default" => array(),
				"target" => 'portfolio',
				"type" => "multiselect",
			),
			array(
				"name" => __("Display Title",'striking_admin'),
				"id" => "title",
				"desc" => __("If the option is on, it will display title of portfolio.",'striking_admin'),
				"default" => true,
				"type" => "toggle"
			),
			array(
				"name" => __("Title Linkable",'striking_admin'),
				"id" => "titleLinkable",
				"desc" => __("If the option is on, the title of portfolio will link to portfolio single page.",'striking_admin'),
				"default" => false,
				"type" => "toggle"
			),
			array(
				"name" => __("Display Description",'striking_admin'),
				"id" => "desc",
				"desc" => __("If the option is on, it will display description of portfolio.",'striking_admin'),
				"default" => true,
				"type" => "toggle"
			),
			array(
				"name" => __("Advance Description",'striking_admin'),
				"id" => "advanceDesc",
				"desc" => __("If the option is on, it will add shortcode support for description.",'striking_admin'),
				"default" => false,
				"type" => "toggle"
			),
			array(
				"name" => __("Display More Button",'striking_admin'),
				"id" => "more",
				"desc" => __("If the option is on, it will display more button.",'striking_admin'),
				"default" => true,
				"type" => "toggle"
			),
			array(
				"name" => __("More Button Text",'striking_admin'),
				"id" => "moreText",
				"default" => theme_get_option('portfolio','more_button_text'),
				"type" => "text",
			),
			array(
				"name" => __("Group",'striking_admin'),
				"id" => "group",
				"desc" => __("If the option is on, the lightbox will display left and right arrow.",'striking_admin'),
				"default" => true,
				"type" => "toggle"
			),
			array(
				"name" => __("Lightbox Title Type",'striking_admin'),
				"id" => "lightboxTitle",
				"default" => '4',
				"options" => array(
					"portfolio" => __("Portfolio Title",'striking_admin'),
					"image" => __("Image Title",'striking_admin'),
					"none" => __("None",'striking_admin'),
				),
				"type" => "select",
			),
			array(
				"name" => __("Order",'striking_admin'),
				"desc" => __("Designates the ascending or descending order of the 'orderby' parameter.",'striking_admin'),
				"id" => "order",
				"default" => 'ASC',
				"options" => array(
					"ASC" => __("ASC (ascending order)",'striking_admin'),
					"DESC" => __("DESC (descending order)",'striking_admin'),
				),
				"type" => "select",
			),
			array(
				"name" => __("Orderby",'striking_admin'),
				"desc" => __("Sort retrieved portfolio items by parameter.",'striking_admin'),
				"id" => "orderby",
				"default" => 'menu_order',
				"options" => array(
					"none" => __("No order",'striking_admin'),
					"id" => __("Order by post id",'striking_admin'),
					"author" => __("Order by author",'striking_admin'),
					"title" => __("Order by title",'striking_admin'),
					"date" => __("Order by date",'striking_admin'),
					"modified" => __("Order by last modified date",'striking_admin'),
					"parent" => __("Order by post/page parent id",'striking_admin'),
					"rand" => __("Random order",'striking_admin'),
					"comment_count" => __("Order by number of comments",'striking_admin'),
					"menu_order" => __("Order by Page Order",'striking_admin'),
				),
				"type" => "select",
			),
			
		),
	),
	array(
		"name" => "Blog",
		"value" => "blog",
		"options" => array(
			array(
				"name" => __("Column",'striking_admin'),
				"id" => "column",
				"default" => '1',
				"options" => array(
					"1" => sprintf(__("%d Column",'striking_admin'),1),
					"2" => sprintf(__("%d Columns",'striking_admin'),2),
					"3" => sprintf(__("%d Columns",'striking_admin'),3),
					"4" => sprintf(__("%d Columns",'striking_admin'),4),
					"5" => sprintf(__("%d Columns",'striking_admin'),5),
					"6" => sprintf(__("%d Columns",'striking_admin'),6),
				),
				"type" => "select",
			),
			array(
				"name" => __("Grid",'striking_admin'),
				"id" => "grid",
				"desc" => __("If the option is on, it will use grid layout for multiple column.",'striking_admin'),
				"default" => false,
				"type" => "toggle"
			),
			array(
				"name" => __("Count",'striking_admin'),
				"desc" => __("Number of posts to show per page",'striking_admin'),
				"id" => "count",
				"default" => '3',
				"min" => 1,
				"max" => 50,
				"step" => "1",
				"type" => "range"
			),
			array(
				"name" => __("Category (optional)",'striking_admin'),
				"id" => "cat",
				"default" => array(),
				"target" => 'cat',
				"type" => "multiselect",
			),
			array(
				"name" => __("Posts (optional)",'striking_admin'),
				"desc" => __("The specific posts you want to display",'striking_admin'),
				"id" => "posts",
				"default" => array(),
				"target" => 'post',
				"type" => "multiselect",
			),
			array(
				"name" => __("Author (optional)",'striking_admin'),
				"id" => "author",
				"default" => array(),
				"target" => 'author',
				"type" => "multiselect",
			),
			array(
				"name" => __("Image",'striking_admin'),
				"id" => "image",
				"desc" => __("If the option is on, it will display Featured Image of blog post",'striking_admin'),
				"default" => true,
				"type" => "toggle"
			),
			array(
				"name" => __("Width",'striking_admin'),
				"desc" => __("The width of Image",'striking_admin'),
				"id" => "width",
				"default" => '630',
				"min" => 0,
				"max" => 960,
				"step" => "1",
				"type" => "range"
			),
			array (
				"name" => __("Height (optional)",'striking_admin'),
				"desc" => __("The height of Feature image.",'striking_admin'),
				"id" => "height",
				"default" => 0,
				"min" => 0,
				"max" => 960,
				"unit" => 'px',
				"step" => "1",
				"type" => "range"
			),
			array(
				"name" => __("Meta Information",'striking_admin'),
				"id" => "meta",
				"desc" => __("If the option is on, it will display Meta Information of blog post",'striking_admin'),
				"default" => true,
				"type" => "toggle"
			),
			array(
				"name" => __("Description",'striking_admin'),
				"id" => "desc",
				"desc" => __("If the option is on, it will display Description of blog post",'striking_admin'),
				"default" => true,
				"type" => "toggle"
			),
			array(
				"name" => __("Display Full Post",'striking_admin'),
				"id" => "full",
				"desc" => __("If the option is on, it will display all content of the post",'striking_admin'),
				"default" => false,
				"type" => "toggle"
			),
			array(
				"name" => __("Nopaging",'striking_admin'),
				"id" => "nopaging",
				"desc" => __("If the option is on, it will disable pagination",'striking_admin'),
				"default" => true,
				"type" => "toggle"
			),
		),
	),
	array(
		"name" => "Sitemap",
		"value" => "sitemap",
		"sub" => true,
		"options" => array(
			array(
				"name" => __("All",'striking_admin'),
				"value" => "all",
				"options" => array (
					array(
						"name" => __("Column",'striking_admin'),
						"id" => "shows",
						"default" => array(),
						"options" => array(
							"pages" => __("Pages",'striking_admin'),
							"categories" => __("Categories",'striking_admin'),
							"posts" => __("Posts",'striking_admin'),
							"portfolios" => __("Portfolios",'striking_admin'),
						),
						"type" => "multiselect",
					),
					array(
						"name" => __("number",'striking_admin'),
						"desc" => __("Sets the number of Pages to display.<br> 0: Display all Pages.",'striking_admin'),
						"id" => "number",
						"default" => '0',
						"min" => 0,
						"max" => 200,
						"step" => "1",
						"type" => "range"
					),
				)
			),
			array(
				"name" => __("Pages",'striking_admin'),
				"value" => "pages",
				"options" => array (
					array(
						"name" => __("depth",'striking_admin'),
						"desc" => __("This parameter controls how many levels in the hierarchy of Pages are to be included. <br> 0: Displays pages at any depth and arranges them hierarchically in nested lists<br> -1: Displays pages at any depth and arranges them in a single, flat list<br> 1: Displays top-level Pages only<br> 2, 3 … Displays Pages to the given depth",'striking_admin'),
						"id" => "depth",
						"default" => '0',
						"min" => -1,
						"max" => 5,
						"step" => "1",
						"type" => "range"
					),
					array(
						"name" => __("number",'striking_admin'),
						"desc" => __("Sets the number of Pages to display.<br> 0: Display all Pages.",'striking_admin'),
						"id" => "number",
						"default" => '0',
						"min" => 0,
						"max" => 200,
						"step" => "1",
						"type" => "range"
					),
				)
			),
			array(
				"name" => __("Categories",'striking_admin'),
				"value" => "categories",
				"options" => array (
					array(
						"name" => __("Show Count",'striking_admin'),
						"id" => "show_count",
						"desc" => __("Toggles the display of the current count of posts in each category.",'striking_admin'),
						"default" => true,
						"type" => "toggle"
					),
					array(
						"name" => __("Show Feed",'striking_admin'),
						"id" => "show_feed",
						"desc" => __("Display a link to each category's <a href='http://codex.wordpress.org/Glossary#RSS' target='_blank'>rss-2</a> feed.",'striking_admin'),
						"default" => true,
						"type" => "toggle"
					),
					array(
						"name" => __("depth",'striking_admin'),
						"desc" => __("This parameter controls how many levels in the hierarchy of Categories are to be included. <br> 0: Displays pages at any depth and arranges them hierarchically in nested lists<br> -1: Displays pages at any depth and arranges them in a single, flat list<br> 1: Displays top-level Pages only<br> 2, 3 … Displays Pages to the given depth",'striking_admin'),
						"id" => "depth",
						"default" => '0',
						"min" => -1,
						"max" => 5,
						"step" => "1",
						"type" => "range"
					),
					array(
						"name" => __("number",'striking_admin'),
						"desc" => __("Sets the number of Categories to display.<br> 0: Display all Categories.",'striking_admin'),
						"id" => "number",
						"default" => '0',
						"min" => 0,
						"max" => 200,
						"step" => "1",
						"type" => "range"
					),
					
				)
			),
			array(
				"name" => __("Posts",'striking_admin'),
				"value" => "posts",
				"options" => array (
					array(
						"name" => __("Show Comment",'striking_admin'),
						"id" => "show_comment",
						"desc" => __(" ",'striking_admin'),
						"default" => true,
						"type" => "toggle"
					),
					array(
						"name" => __("number",'striking_admin'),
						"desc" => __("Sets the number of Pages to display.<br> 0: Display all Pages.",'striking_admin'),
						"id" => "number",
						"default" => '0',
						"min" => 0,
						"max" => 200,
						"step" => "1",
						"type" => "range"
					),
					array(
						"name" => __("Category (optional)",'striking_admin'),
						"id" => "cat",
						"default" => array(),
						"target" => 'cat',
						"type" => "multiselect",
					),
					array(
						"name" => __("Posts (optional)",'striking_admin'),
						"desc" => __("The specific posts you want to display",'striking_admin'),
						"id" => "posts",
						"default" => array(),
						"target" => 'post',
						"type" => "multiselect",
					),
					array(
						"name" => __("Author (optional)",'striking_admin'),
						"id" => "author",
						"default" => array(),
						"target" => 'author',
						"type" => "multiselect",
					),
				)
			),
			array(
				"name" => __("Portfolios",'striking_admin'),
				"value" => "portfolios",
				"options" => array (
					array(
						"name" => __("Show Comment",'striking_admin'),
						"id" => "show_comment",
						"desc" => __(" ",'striking_admin'),
						"default" => false,
						"type" => "toggle"
					),
					array(
						"name" => __("number",'striking_admin'),
						"desc" => __("Sets the number of Pages to display.<br> 0: Display all Pages.",'striking_admin'),
						"id" => "number",
						"default" => '0',
						"min" => 0,
						"max" => 200,
						"step" => "1",
						"type" => "range"
					),
					array(
						"name" => __("Category (optional)",'striking_admin'),
						"id" => "cat",
						"default" => array(),
						"target" => 'portfolio_category',
						"type" => "multiselect",
					),
				)
			),
		),
	),
);