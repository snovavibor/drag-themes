<?php



 add_action('wp_print_styles', 'drag_scripts'); 

function drag_scripts() {
	wp_enqueue_style( 'main-style', get_stylesheet_uri(),['bootstrap-style'] );
	wp_enqueue_style( 'bootstrap-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
	
}




add_shortcode('users', 'all_users');

function all_users()
{
	global $wpdb;
	$str = '<ul>';
 
$usernames = $wpdb->get_results("SELECT ID, user_nicename, user_email FROM $wpdb->users WHERE ID > 1 ORDER BY ID DESC LIMIT 10");
 
foreach ($usernames as $username) {
	
 $str .= '<li class="m-2">' .get_avatar($username->user_email, 45) .'<a href="/profile/?id='. $username->ID.'" class="ml-2">'.$username->user_nicename."</a></li>";

}
$str .= '</ul>';
 
return $str;

}

add_shortcode('user', 'one_user');

function one_user()
{
	$id = $_GET['id'];
	$info = get_user_meta($id);


	$str = '';
	
	foreach($info as $user => $key){
		
		foreach(FIELDS as $filds){
			foreach($filds as $nameField => $val){
				if($nameField == $user){
					$str.='<p class="p-2 bg-warning">'.$val.'==='.base64_decode($key[0]).'</p><br>';
				}
			}
				
		}
		
		
		
	}
	
	return $str;
}


//add_filter('user_new_form', 'custom_fields_add'); 

