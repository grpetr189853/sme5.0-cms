<?/*
[MAIN]
TABLE=CalendarEventsTable
KEY_FIELD=event_id

DISABLED_COPY=0
DISABLED_DELETE=0
DISABLED_EDIT=0
DISABLED_ADD=0
ENABLE_MEGA_DELETE=0
IS_READONLY=0
DISABLED_MOVE=1

LIST_EXTRACTOR_METHOD=GetAdminEventsListList
LIST_COUNTER_METHOD=GetAdminEventsListCount

GROUP_TITLE_UA=����������
GROUP_TITLE_RU=����������
GROUP_TITLE_EN=Repeat
GROUP_NAME=repeat

GROUP_TITLE_UA=���� ����
GROUP_TITLE_RU=���� ������
GROUP_TITLE_RU=Meta data
GROUP_NAME=meta

[LIST]
RECORDS_PER_PAGE=10
FIELDS_COUNT=20

[FIELD_0]
FIELD_NAME=event_id
SORT=1
CONTROL=string
EDIT_CONTROL=null
IN_LIST=1
LENGTH=0

[FIELD_1]
FIELD_NAME=title_%s
SORT=1
CONTROL=link
EDIT_CONTROL=text
IN_LIST=1
BOLD=1
IS_MULTILANG = 1

[FIELD_2]
FIELD_NAME=system
CONTROL=null
EDIT_CONTROL=text
IN_LIST=0

[FIELD_3]
FIELD_NAME=category_id
SORT=1
CONTROL=dbtreepath
EDIT_CONTROL=dbtreecombobox
FIELD_TABLE=CalendarCategoriesTable
FIELDVALUE_NAME=category_id
FIELDVALUE_CAPTION=caption_%s
PARENTVALUE_NAME=parent_id
FIELDVALUE_PARENT=parent_id
GET_ORDERS = caption_%s 1
MULTIPLE=0
IN_LIST=1
SIZE=10
LENGTH=255

[FIELD_4]
FIELD_NAME=date_start
CONTROL=date
FULLDATE=0
EDIT_CONTROL=date
EDIT_FULLDATE=0
IN_LIST=1
SORT=1
CAPTION_PREFIX =ls_

[FIELD_5]
FIELD_NAME=date_end
CONTROL=null
EDIT_CONTROL=date
EDIT_FULLDATE=0
IN_LIST=0

[FIELD_6]
FIELD_NAME=short_description_%s
SORT=1
CONTROL=null
EDIT_CONTROL=textarea
IN_LIST=0
IS_MULTILANG = 1

[FIELD_7]
FIELD_NAME=full_description_%s
CONTROL=null
EDIT_CONTROL=spaweditor
IN_LIST=0
IS_MULTILANG = 1

[FIELD_8]
FIELD_NAME=contacts_%s
CONTROL=null
EDIT_CONTROL=textarea
IN_LIST=0
IS_MULTILANG = 1

[FIELD_9]
FIELD_NAME=tags_%s
CONTROL=null
EDIT_CONTROL=autocomplete
FIELD_TABLE = TagsTable
FIELD_ITEM_TYPE = event
##FIELD_RELATION_NAME=event_id
FIELD_WORDS_NAME=tag_%s
##AUTOCOMPLETE_METHOD = GetAutocompleteWords
ENABLE_CREATE_NEW_ITEMS = 1
##WORDS_DELIMETER = |
IN_LIST=0
SORT=0
IS_MULTILANG=1
MULTIPLE=1

[FIELD_10]
FIELD_NAME=small_image
SORT=1
CONTROL=file
EDIT_CONTROL=file
IN_LIST=1
DIRECTORY=

[FIELD_11]
FIELD_NAME=email
CONTROL=null
EDIT_CONTROL=text
IN_LIST=0

[FIELD_12]
FIELD_NAME=url
CONTROL=null
EDIT_CONTROL=text
IN_LIST=0

[FIELD_13]
FIELD_NAME=repeat_event
CONTROL=null
EDIT_CONTROL=repeat
IN_LIST=0
GROUP = repeat

[FIELD_14]
FIELD_NAME=_lastmodified
SORT=1
CONTROL=date
EDIT_CONTROL=null
FULLDATE=1
IN_LIST=0
ALIGN=center

[FIELD_15]
FIELD_NAME=enable_comments
SORT=1
CONTROL=checkbox
EDIT_CONTROL=checkbox
CHECKON=1
CHECKOFF=0
IN_LIST=1
ALIGN=center
PACKAGE = comments
CAPTION_PREFIX = ls_

[FIELD_16]
FIELD_NAME=active
SORT=1
CONTROL=checkbox
EDIT_CONTROL=checkbox
CHECKON=1
CHECKOFF=0
IN_LIST=1
ALIGN=center

[FIELD_17]
FIELD_NAME=meta_title_%s
CONTROL=null
EDIT_CONTROL=text
IS_MULTILANG=1
GROUP = meta

[FIELD_18]
FIELD_NAME=meta_keywords_%s
CONTROL=null
EDIT_CONTROL=textarea
IS_MULTILANG=1
GROUP = meta

[FIELD_19]
FIELD_NAME=meta_description_%s
CONTROL=null
EDIT_CONTROL=textarea
IS_MULTILANG=1
GROUP = meta




*/
?>