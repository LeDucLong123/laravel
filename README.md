# Project: Music Room

---

<img src="./image/welcome.jpg" alt="Welcome" width="820" height="380">

---

## Deployment Guide(Local Development Environment)
1. Clone the Repository
```php
git clone https://github.com/LeDucLong123/laravel_1.git
```
```php
cd Music
```
2. Install Dependencies:
```php
composer install
```
3. Set Up Environment Variables:
```php
cp .env.example .env
```
```php
php artisan key:generate
```
4. Configure Database Settings:
- Correct configuration with the database on your local machine
- After registering or creating an account, you need to access the database and set the users table to have column userRole = 1 to use **ADMIN** rights.
5. Run Migrations and Seed the Database:
```php
php artisan migrate
```
6. Start the Local Development Server:
```php
php artisan serve
```
7. Access the Application:
- Access your website: http://localhost:8000

---

## UML - Class Diagram

<img src="./image/class.png" alt="Welcome" width="820">

---

## Use Case Diagram

<img src="./image/usecase.png" alt="Welcome" width="820">

---

## Booking
```mermaid
sequenceDiagram
    User->>Server: Yêu cầu đặt phòng
    Server->>Room: Kiểm tra phòng trống
    Room-->>Server: Trả về thông tin phòng
    Server->>Order: Tạo Order và lưu
    Order-->>Server: Lưu thành công
    Server-->>User: Gửi kết quả cho User
```

---

## Check-out
```mermaid
sequenceDiagram
    User->>Server: Gửi yêu cầu trả phòng
    Server->>Order: Kiểm tra thông tin đơn đặt phòng
    Order-->>Server: Trả về thông tin đặt phòng
    Server->>Room: Cập nhật trạng thái phòng (Phòng trống)
    Room-->>Server: Xác nhận cập nhật thành công
    Server-->>User: Xác nhận trả phòng thành công
```