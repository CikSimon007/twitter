<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Showcase</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .car-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .car-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .car-card:hover {
            transform: translateY(-10px);
        }

        .car-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .car-info {
            padding: 20px;
        }

        .car-info h3 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }

        .car-info p {
            margin: 10px 0;
            font-size: 16px;
            color: #666;
        }

        .price {
            font-weight: bold;
            font-size: 20px;
            color: #2c3e50;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #f9f9f9;
        }

        .button-container a {
            text-decoration: none;
            background-color: #27ae60;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button-container a:hover {
            background-color: #2ecc71;
        }

    </style>
</head>
<body>

    <div class="car-container">
        <div class="car-card">
            <img src="https://via.placeholder.com/300x200" alt="Car Image">
            <div class="car-info">
                <h3>Ford Mustang</h3>
                <p>Powerful muscle car with a V8 engine and sleek design. A true classic for car enthusiasts.</p>
                <p class="price">$45,000</p>
            </div>
            <div class="button-container">
                <a href="#">View Details</a>
                <a href="#">Buy Now</a>
            </div>
        </div>

        <div class="car-card">
            <img src="https://via.placeholder.com/300x200" alt="Car Image">
            <div class="car-info">
                <h3>Tesla Model S</h3>
                <p>Electric performance at its best. Autopilot, top-tier acceleration, and cutting-edge tech.</p>
                <p class="price">$85,000</p>
            </div>
            <div class="button-container">
                <a href="#">View Details</a>
                <a href="#">Buy Now</a>
            </div>
        </div>

        <div class="car-card">
            <img src="https://via.placeholder.com/300x200" alt="Car Image">
            <div class="car-info">
                <h3>BMW 3 Series</h3>
                <p>Compact luxury sports sedan with top-level comfort and driving dynamics.</p>
                <p class="price">$50,000</p>
            </div>
            <div class="button-container">
                <a href="#">View Details</a>
                <a href="#">Buy Now</a>
            </div>
        </div>
    </div>

</body>
</html>
