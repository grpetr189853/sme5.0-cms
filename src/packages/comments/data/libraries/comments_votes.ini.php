<?/*

[MAIN]
TABLE=CommentsVotesTable
KEY_FIELD=vote_id

ENABLE_NODE_MOVE=0
DISABLED_ADD = 1
DISABLED_MOVE = 1
DISABLED_COPY = 1
DISABLED_EDIT = 1
DISABLED_VIEW = 1

LIST_EXTRACTOR_METHOD = GetCommentsVotesAdminList

USE_CUSTOM_LIST_CAPTION=1
CUSTOM_LIST_CAPTION_TABLE=CommentsTable
HTTPVAR_CAPTIONID_HOLDER=comments_parent_id
CUSTOM_LIST_CAPTIONID_FIELD=comment_id
CUSTOM_LIST_CAPTION=comment_id

[LIST]
RECORDS_PER_PAGE=20
FIELDS_COUNT=4
GET_ORDERS = _lastmodified 0

[FIELD_0]
FIELD_NAME=vote_id
SORT=1
CONTROL=string
EDIT_CONTROL=null
IN_LIST=1
LENGTH=0

[FIELD_1]
FIELD_NAME=user
SORT=0
CONTROL=string
EDIT_CONTROL=null
IN_LIST=1
BOLD=0

[FIELD_2]
FIELD_NAME=vote
SORT=0
CONTROL=string
EDIT_CONTROL=null
IN_LIST=1
BOLD=0

[FIELD_3]
FIELD_NAME=_lastmodified
SORT=1
CONTROL=date
EDIT_CONTROL=null
FULLDATE=1
EDIT_FULLDATE=1
IN_LIST=1
BOLD=0

*/
?>