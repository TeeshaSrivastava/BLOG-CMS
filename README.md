# BLOG-CMS
A simple blog CMS built with core PHP and MySQL
# 📝 Blog CMS in PHP

A lightweight content management system built using **core PHP** and **MySQL**, designed to manage blog posts with an admin dashboard, login authentication, and post creation functionality. Ideal for learning how back-end systems work under the hood, without relying on frameworks or CMS platforms.

---
## 🚀 Features

- 🔐 Admin login system with session handling
- 🛠️ Dashboard interface to manage blog content
- ✍️ Create and store blog posts dynamically
- 🧱 Clean code structure with modular PHP files
- 💾 MySQL database connection (via `db.php`)
- 🎨 Simple and responsive UI with custom CSS

---

## 🛠️ Tech Stack

| Technology | Purpose                  |
|------------|---------------------------|
| PHP        | Backend development       |
| MySQL      | Database management       |
| HTML/CSS   | Page structure and styling|
| XAMPP      | Local server (Apache + DB)|
| Git/GitHub | Version control & hosting |

---

## 📁 Project Structure

blog-cms/
├── index.php # Landing page with link to admin login
├── login.php # Admin login form with validation
├── dashboard.php # Admin dashboard after login
├── create_post.php # Form to create new posts
├── logout.php # Logout functionality
├── db.php # Database connection file
├── style.css # Custom styling

---

## 🖥️ How to Run the Project Locally

### 🔧 Requirements
- PHP installed (via [XAMPP](https://www.apachefriends.org/) or similar)
- MySQL database server
- Web browser

### 🪜 Steps
1. **Clone or Download the Project**
   ```bash
   git clone https://github.com/yourusername/blog-cms.git
C:/xampp/htdocs/
Start XAMPP

Start Apache and MySQL

Create a Database

Go to: http://localhost/phpmyadmin

Create a database named: blog_cms

Create a table posts with:

CREATE TABLE posts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  content TEXT NOT NULL
);
Run the App
Visit in browser:


http://localhost/blog-cms/
Login Credentials

Username: admin

Password: admin

📷 Screenshots
Add screenshots of the dashboard, login, and post creation here (optional)

🙋‍♀️ Author
Teesha Srivastava
👩‍💻 GitHub
🔗 Portfolio
📧 your.email@example.com

📄 License
This project is licensed under the MIT License — feel free to use and modify it.

Built with 💡 and pure PHP logic — no frameworks!


---

### ✅ What to Do Next

1. Copy the content above
2. Go to your `blog-cms` GitHub repo
3. Click **"Add file" → "Create new file"**
4. Name it: `README.md`
5. Paste the content and click **Commit**

Let me know if you'd like to include screenshots or add your LinkedIn link too — happy to help personalize it!
