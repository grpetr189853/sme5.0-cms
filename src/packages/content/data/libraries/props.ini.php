<?/*
[MAIN]
TABLE=ContentTable
KEY_FIELD=id

USE_CUSTOM_EDIT_CAPTION=1
CUSTOM_EDIT_CAPTION_TABLE=ContentTable
HTTPVAR_CAPTIONID_HOLDER=parent_id
CUSTOM_EDIT_CAPTIONID_FIELD=id
CUSTOM_EDIT_CAPTION=title

GROUP_NAME = additional_functions
GROUP_TITLE_RU = �������������� �������
GROUP_TITLE_UA = �������� �������
GROUP_TITLE_EN = Additional functions

[LIST]
RECORDS_PER_PAGE=20
FIELDS_COUNT=16

[FIELD_0]
FIELD_NAME=name
CONTROL=null
EDIT_CONTROL=text

[FIELD_1]
FIELD_NAME=title_%s
CONTROL=null
EDIT_CONTROL=text
IS_MULTILANG = 1

[FIELD_2]
FIELD_NAME=show_in_top_menu
CONTROL=null
EDIT_CONTROL=checkbox
CHECKON=1
CHECKOFF=0

[FIELD_3]
FIELD_NAME=show_in_page_menu
CONTROL=null
EDIT_CONTROL=checkbox
CHECKON=1
CHECKOFF=0

[FIELD_4]
FIELD_NAME=show_in_bottom_menu
CONTROL=null
EDIT_CONTROL=checkbox
CHECKON=1
CHECKOFF=0

[FIELD_5]
FIELD_NAME=show_in_sitemap
CONTROL=null
EDIT_CONTROL=checkbox
CHECKON=1
CHECKOFF=0

[FIELD_6]
FIELD_NAME=banner_id
FIELD_TABLE = BannerGroupsTable
FIELDVALUE_NAME=group_id
FIELDVALUE_CAPTION=group_title
EDIT_CONTROL=dbtreecombobox
PARENTVALUE_NAME=parent_id
MULTIPLE=1
RELATIONS_TABLE=BannerPagesTable

USE_ENTRIES=1
ENTRIES_TABLE = BannersTable
ENTRIESVALUE_NAME = group_id
ENTRIESVALUE_CAPTION = banner_title
ALLOW_CATEGORY_SELECT = 0
PACKAGE = banner

[FIELD_7]
FIELD_NAME=enable_comments
SORT=1
CONTROL=checkbox
EDIT_CONTROL=checkbox
CHECKON=1
CHECKOFF=0
IN_LIST=1
ALIGN=center
PACKAGE = comments

[FIELD_8]
FIELD_NAME=active
CONTROL=null
EDIT_CONTROL=checkbox
CHECKON=1
CHECKOFF=0

[FIELD_9]
FIELD_NAME=active_%s
CONTROL=null
EDIT_CONTROL=checkbox
CHECKON=1
CHECKOFF=0
IS_MULTILANG = 1

[FIELD_10]
FIELD_NAME=point_type
CONTROL=null
EDIT_CONTROL=combobox
GROUP = additional_functions

[FIELD_11]
FIELD_NAME=point_page
CONTROL=null
EDIT_CONTROL=combobox
OPTIONS =
GROUP = additional_functions

[FIELD_12]
FIELD_NAME=point_php_code
CONTROL=null
EDIT_CONTROL=textarea
GROUP = additional_functions

[FIELD_13]
FIELD_NAME=meta_title_%s
CONTROL=null
EDIT_CONTROL=text
IS_MULTILANG = 1

[FIELD_14]
FIELD_NAME=meta_keywords_%s
CONTROL=null
EDIT_CONTROL=textarea
IS_MULTILANG = 1

[FIELD_15]
FIELD_NAME=meta_description_%s
CONTROL=null
EDIT_CONTROL=textarea
IS_MULTILANG = 1

*/
?>