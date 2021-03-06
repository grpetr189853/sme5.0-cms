<?/*
[MAIN]
TABLE=SubscribeThemesTable
KEY_FIELD=theme_id

DISABLED_DELETE=0
DISABLED_EDIT=0
DISABLED_ADD=0
DISABLED_COPY=0

IS_MULTILEVEL=1
PARENT_FIELD=parent_id
CAPTION_FIELD=theme_title_%s
USE_SUB_CATEGORIES = 1
SUB_CATEGORIES_COUNT = 2
ENABLE_MEGA_DELETE=1
ENABLE_NODE_MOVE=0
MAX_NODE_LEVEL=2
DISABLE_LASTLEVEL_LIST=1

[ACCESS]
ROLES = SUBSCRIBE_MANAGER,SUBSCRIBE_EDITOR

[LIST]
RECORDS_PER_PAGE=20
FIELDS_COUNT=3


[SUB_CATEGORY_0]
APPLY_LIBRARY=contentlist
LINK_FIELD=theme_id
ENABLED_NODE_LEVELS=1..*

[SUB_CATEGORY_1]
APPLY_LIBRARY=archivelist
LINK_FIELD=theme_id
ENABLED_NODE_LEVELS=1..*

[FIELD_0]
FIELD_NAME=theme_id
SORT=1
CONTROL=string
EDIT_CONTROL=null
IN_LIST=1
LENGTH=0

[FIELD_1]
FIELD_NAME=theme_title_%s
SORT=1
CONTROL=link
EDIT_CONTROL=text
IN_LIST=1
IS_MULTILANG=1

[FIELD_2]
FIELD_NAME=active
SORT=0
CONTROL=checkbox
EDIT_CONTROL=checkbox
CHECKON=1
CHECKOFF=0
IN_LIST=1
ALIGN=center

*/
?>