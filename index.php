<!DOCTYPE html>
<html >
  <head>
    <meta http-equiv="Content-Type"  charset="utf-8" />
    <title>リクエスト</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge chrome=1" />
    <script type="text/javascript" src="common/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="common/js/tsCheck.js"></script>
    <link rel="stylesheet" type="text/css" href="common/css/tsStyle.css" media="all" />
    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" rel="stylesheet" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
    <script type="text/javascript">
      <!--
        jQuery( function() {
          if($("#datepickerST").val() == ""){
            $("#datepickerST").datepicker();
            $("#datepickerST").datepicker('setDate', 'today');
          }else{
            $("#datepickerST").datepicker();
            $("#datepickerST").datepicker('setDate', $("#datepickerST").val());
          }
          $("#timepickerST").timepicker({ 'timeFormat': 'H:i'});
          $("#timepickerEN").timepicker({ 'timeFormat': 'H:i'});
          $("#jquery-ui-datepickerEN").datepicker();
          $("#jquery-ui-datepickerEN").datepicker("option", {"dateFormat": "yy/mm/dd"});
          $("#jquery-ui-datepickerEN").datepicker('setDate', 'today');
        } );
      // -->
    </script>
  </head>
  <body>
    <div id="header" class="mod_form">
      <div class="description"></div>
        <table>
          <tr>
            <th>
              <div class="item_title">依頼日時<br /></div>
              <div class="item_sub_title">
                日付&nbsp;<span class="ex_essential" >*</span><br />
                時間&nbsp;&nbsp;&nbsp;
              </div>
            </th>
            <td>
              <br />
              <input type="text" id="datepickerST" name="startdate_s"  /><br />
              <input type="time" id="timepickerST" name="starttime_s" value="" placeholder="hh:mm" />
            </td>
          </tr>
        </table>
      </div>
    </div>
  </body>
</html>
