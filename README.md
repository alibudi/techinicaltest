<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Install
- git clone https://github.com/alibudi/techinicaltest.git
- composer update
- cp .env.example to .env
- php artisan key:generate
- php artisan migrate
- php artisan db:seed


<br>


## API Endpoints

### Create Subscription

**Endpoint:** `POST /subscriptions`


**Example Request:**
```bash
curl -X POST http://your-domain.com/subscriptions \
    -H "Content-Type: application/json" \
    -d '{"user_id": 1}'
   ```

**Example Response:**
```json
{
    "id": 1,
    "user_id": 1,
    "amount": "69000.00",
    "net_amount": "55200.00",
    "created_at": "2024-07-21T12:00:00.000000Z",
    "updated_at": "2024-07-21T12:00:00.000000Z"
}
``` 


### Record Watch Time

**Endpoint:** `POST /class-watch-times`


**Example Request:**
```bash
curl -X POST http://your-domain.com/class-watch-times \
    -H "Content-Type: application/json" \
    -d '{"class_id": 1, "user_id": 1, "watch_time": 20}'
   ```

**Example Response:**
```json
{
    "id": 1,
    "class_id": 1,
    "user_id": 1,
    "watch_time": 20,
    "created_at": "2024-07-21T12:00:00.000000Z",
    "updated_at": "2024-07-21T12:00:00.000000Z"
}

``` 

### Distribute Revenue

**Endpoint:** `GET /distribute-revenu`


**Example Request:**
```bash
curl -X GET http://your-domain.com/distribute-revenue
   ```

**Example Response:**
```json
[
    {
        "mentor_id": 1,
        "class_name": "Class A",
        "watch_time": 20,
        "percentage": 0.2,
        "revenue": 11040
    },
    {
        "mentor_id": 1,
        "class_name": "Class B",
        "watch_time": 50,
        "percentage": 0.5,
        "revenue": 27600
    },
    {
        "mentor_id": 1,
        "class_name": "Class C",
        "watch_time": 30,
        "percentage": 0.3,
        "revenue": 16560
    }
]


``` 
