<?php

//Add custom user fields to admin User Profile section
add_action( 'show_user_profile', 'socialmedia_profile_fields' );
add_action( 'edit_user_profile', 'socialmedia_profile_fields' );

function socialmedia_profile_fields( $user ) {
?>

    <h3>Social Media</h3>
    <table class="form-table">
        <tr>
            <th>
                <label for="googleplus">Google+</label>
            </th>
            <td>
                <input type="text" name="googleplus" id="googleplus" value="<?php echo esc_attr(get_the_author_meta('googleplus', $user->ID)); ?>" style="width: 350px;" /><br />
                <span class="description">Please enter the full URL to your Google+ profile, ie: https://plus.google.com/105332612645303407550/</span>
            </td>
        </tr>
     </table>

<?php 
}


//Add action to save user input
add_action( 'personal_options_update', 'save_socialmedia_profile_fields' );
add_action( 'edit_user_profile_update', 'save_socialmedia_profile_fields' );

function save_socialmedia_profile_fields( $user_id ) {
    if ( !current_user_can( 'edit_user', $user_id ) ) {
        return false;
    }

    update_usermeta( $user_id, 'googleplus', $_POST['googleplus'] );
}

?>