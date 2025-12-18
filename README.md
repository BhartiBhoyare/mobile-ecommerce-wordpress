# Mobile E-commerce Homepage – WordPress Assignment

This project is a **mobile-first e-commerce homepage** developed using **WordPress**, strictly based on the provided **Figma design**.  
The objective of this assignment is to build a **fully dynamic, CMS-driven homepage** so that a **non-technical business user** can manage all content easily from the WordPress admin dashboard.

---

## 🎯 Assignment Objective

- Recreate the **mobile homepage layout** from the given Figma design
- Avoid hardcoded text or images
- Implement a **dynamic content system** using WordPress
- Ensure clean, readable, and maintainable code
- Follow performance-friendly and CMS-friendly best practices

---

## 📱 Implemented Sections (Mobile Only)

- Announcement Bar
- Header with Logo
- Hero Section (Heading, Subheading, Image, CTA Button)
- Brand Logos Section
- New Arrivals Product Section
- View All Products Button

---

## 🛠️ Technologies Used

- **WordPress**
- **PHP**
- **Advanced Custom Fields (ACF)**
- **WooCommerce**
- **Swiper.js**
- **HTML5 / CSS3 / JavaScript**

---

## 🧩 Dynamic CMS Features

All the following content is editable via the WordPress Admin Panel:

- Announcement bar text
- Hero section content (heading, subheading, image)
- Hero CTA button text and link
- Brand logos (upload / remove dynamically)
- New Arrivals product category selection
- Product image, price, sale price, and ratings (via WooCommerce)

No content is hardcoded.

---

## 🛒 New Arrivals Section Details

- Products are fetched dynamically using **WP_Query**
- Product category is controlled via an **ACF taxonomy field**
- Displays **4 products in total**
- Shows **2 products per view on mobile**
- Remaining products are accessible via **horizontal swipe (Swiper.js)**
- Product ratings are displayed dynamically from WooCommerce reviews
- Discount amount is calculated using regular and sale price

---

## 📂 Project Structure

mobile-ecommerce/
├── style.css
├── functions.php
├── page-home.php
├── header.php
├── footer.php
├── index.php
└── README.md

## ⚙️ Local Setup Instructions

1. Install WordPress locally using XAMPP / MAMP / Local WP
2. Copy this theme folder into:

wp-content/themes/mobile-ecommerce

3. Activate the theme from:

Dashboard → Appearance → Themes

4. Install and activate required plugins:
- Advanced Custom Fields (ACF)
- WooCommerce
5. Create WooCommerce products and assign them to categories
6. Configure ACF fields for homepage content
7. Set the homepage to use the **Home Page Template**

---

## 🔐 Best Practices Followed

- No hardcoded text or images
- Clean and structured PHP code
- CMS-friendly backend for non-developers
- Optimized image handling
- No sensitive files committed to GitHub (e.g. wp-config.php)

---

## 👩‍💻 Developer

**Bharti Bhoyare**  
Frontend / WordPress Developer  

---

## 📌 Notes

- WordPress core files and media uploads are intentionally excluded
- This project is created strictly according to the assignment requirements

---

## 📄 Declaration

This project is created solely for **assignment submission and evaluation purposes**.


