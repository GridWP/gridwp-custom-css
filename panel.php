<?php

function gridwp_custom_css_fp_panel() {

    gridwp_custom_css_string_setting("gridwp_custom_css_header",'');
    gridwp_custom_css_is_checked("gridwp_custom_css_header_on");
    gridwp_custom_css_string_setting("gridwp_custom_css_footer",'');    
    gridwp_custom_css_is_checked("gridwp_custom_css_footer_on"); 
 
?>
<div class="wrap">
<div id="icon-options-general" class="icon32"><br></div><h2><?php _e( 'Custom CSS Settings', 'gridwp-custom-css' ); ?></h2>

This will allow you to customize the CSS styles for the frontend of your website.

<form action="" method="post">

<div id="poststuff">
<div class="postbox">
<table class="form-table">
<tbody>

<h3><?php _e( 'Header CSS', 'gridwp-custom-css' ); ?></h3>

<tr valign="top">
<th scope="row"><label for="home"><?php _e( 'On / Off', 'gridwp-custom-css' ); ?></label></th>
<td>
<label for="gridwp_custom_css_header_on">
<div style="margin-left:5px" class="switch toggle3">
<input name="gridwp_custom_css_header_on" type="checkbox" id="gridwp_custom_css_header_on" value="1" <?php echo get_option("gridwp_custom_css_header_on");?>>
<label><i></i></label>
</div>
<i><?php _e( "Turn 'On' to enable header CSS.", 'gridwp-custom-css' ); ?></i>
</tr>

<tr valign="top">
<th scope="row"><label for="home"><?php _e( 'Inline CSS', 'gridwp-custom-css' ); ?></label><br/></th>
<td>
<label for="gridwp_custom_css_header">
<textarea style="background:#f7f7f7;color:#373737" name="gridwp_custom_css_header" id="gridwp_custom_css_header" rows="15" cols="125"><?php echo get_option("gridwp_custom_css_header");?></textarea>
</label>
<div style="font-size:small;border:1px dotted #e1e1e1;margin-left:5px;margin-right:5px;margin-top:15px;padding:5px;">
<?php _e( 'Add your custom CSS that you would like to include in the header of your theme.', 'gridwp-custom-css' ); ?><br />
<br />
EXAMPLE: <code>.test_css { color: #000000; }</code>
</div>
</td
</tr>

</tbody></table>
</div></div>

<div id="poststuff">
<div class="postbox">
<table class="form-table">
<tbody>

<h3><?php _e( 'Footer CSS', 'gridwp-custom-css' ); ?></h3>

<tr valign="top">
<th scope="row"><label for="home"><?php _e( 'On / Off', 'gridwp-custom-css' ); ?></label></th>
<td>
<label for="gridwp_custom_css_footer_on">
<div style="margin-left:5px" class="switch toggle3">
<input name="gridwp_custom_css_footer_on" type="checkbox" id="gridwp_custom_css_footer_on" value="1" <?php echo get_option("gridwp_custom_css_footer_on");?>>
<label><i></i></label>
</div>
<i><?php _e( "Turn 'On' to enable Footer CSS.", 'gridwp-custom-css' ); ?></i>
</tr>

<tr valign="top">
<th scope="row"><label for="home"><?php _e( 'Inline CSS', 'gridwp-custom-css' ); ?></label></th>
<td>
<label for="gridwp_custom_css_footer">
<textarea style="background:#f7f7f7;color:#373737" name="gridwp_custom_css_footer" id="gridwp_custom_css_footer" rows="15" cols="125"><?php echo get_option("gridwp_custom_css_footer");?></textarea>
</label>
<div style="font-size:small;border:1px dotted #e1e1e1;margin-left:5px;margin-right:5px;margin-top:15px;padding:5px;">
<?php _e( 'Add your custom CSS that you would like to include in the footer of your theme.', 'gridwp-custom-css' ); ?><br />
<br />
EXAMPLE: <code>.test_css { color: #000000; }</code>
</div>
</td
</tr>

</tbody></table>
</div></div>

<p style="border-bottom: 1px dashed #CCCCCC;padding-bottom: 20px">
<input type="hidden" name="gridwp_custom_css_panel" value="1">
<input type="submit" class="button button-primary" value="<?php _e( 'Save Changes', 'gridwp-custom-css' ); ?>">
</p>

</form>
<style>
th label{padding-left:10px}
th,td{border-left: 1px solid #e1e1e1;border-right: 1px solid #e1e1e1;border-top: 1px solid #e1e1e1}
h3{color:#464646}
input{font-size: 14px}
.form-table{margin-top: 0px}
.thickbox {opacity:1.0}
.thickbox:hover {opacity:0.7}
</style>
</div>
<?php

}//end: gridwp-custom-css_fp_panel