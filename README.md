# Instagram Clone Project

Welcome to our Instagram clone project! This web application is built using Laravel, HTML, CSS, JavaScript, and Bootstrap, aiming to replicate the core functionalities of Instagram. Here's a detailed guide to understanding and running this project.

## Features

### 1. User Authentication
- **User Registration:** Users can create new accounts with their email addresses.
- **User Login:** Existing users can log in securely to their accounts.

### 2. Profile Management
- **User Profiles:** Each user has a dedicated profile displaying their posts, followers, following, and bio information.
- **Profile Picture:** Users can upload and change their profile pictures.
- **Bio and Details:** Users can edit their profile information and bio.

### 3. Posts and Media
- **Create Posts:** Users can upload photos and share them with their followers.
- **Like and Comment:** Users can like and comment on posts.
- **Delete Posts:** Users can delete their own posts.

### 4. Social Interactions
- **Follow and Unfollow:** Users can follow and unfollow other users.
- **Timeline:** Users can view a timeline of posts from the users they are following.
- **Explore:** Users can discover new posts and users based on popular and trending content.

### 5. Notifications
- **Like and Comment Notifications:** Users receive notifications for likes and comments on their posts.
- **Follow Notifications:** Users receive notifications when someone follows them.

### 6. Search
- **User Search:** Users can search for other users by their usernames or names.

## Getting Started

1. **Clone the Repository:**
   ```
   git clone https://github.com/mrabdulhannan/laravel-instagram-clone.git
   ```

2. **Install Dependencies:**
   ```
   composer install
   npm install
   ```

3. **Database Setup:**
    - Create a new MySQL database.
    - Configure your `.env` file with the database connection details.
    - Run migrations and seed the database:
      ```
      php artisan migrate --seed
      ```

4. **Start the Development Server:**
   ```
   php artisan serve
   npm run dev
   ```

5. **Access the Application:**
   Open your browser and go to `http://localhost:8000` to access the Instagram clone.

## Technologies Used

- **Laravel:** The PHP framework used for backend development.
- **HTML, CSS, JavaScript:** Frontend technologies for creating the user interface.
- **Bootstrap:** Frontend framework for responsive and visually appealing design.

## Contributors

- [Abdul Hannan Danish](https://github.com/mrabdulhannan)

## License

This project is licensed under the [MIT License](LICENSE.md) - see the [LICENSE.md](LICENSE.md) file for details.

Feel free to explore, contribute, and create your own Instagram-like experience with this project! If you encounter any issues or have suggestions for improvements, please don't hesitate to open an issue or submit a pull request. Happy coding!