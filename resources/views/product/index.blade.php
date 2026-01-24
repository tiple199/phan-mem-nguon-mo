<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 2rem;
        }
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
        }
        .product-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
        }
        .product-image {
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
        }
        .product-info {
            padding: 20px;
        }
        .product-name {
            font-size: 1.1rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }
        .product-specs {
            font-size: 0.85rem;
            color: #666;
            margin-bottom: 12px;
            line-height: 1.5;
        }
        .product-price {
            font-size: 1.3rem;
            font-weight: 700;
            color: #e74c3c;
            margin-bottom: 15px;
        }
        .product-price span {
            font-size: 0.9rem;
            color: #999;
            text-decoration: line-through;
            margin-left: 10px;
            font-weight: 400;
        }
        .btn-buy {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: opacity 0.3s;
        }
        .btn-buy:hover {
            opacity: 0.9;
        }
        .badge {
            display: inline-block;
            padding: 4px 10px;
            background: #27ae60;
            color: white;
            font-size: 0.75rem;
            border-radius: 4px;
            margin-bottom: 10px;
        }
        .badge.sale {
            background: #e74c3c;
        }
        .add-link {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
        }
        .add-link:hover {
            background: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🖥️ Danh Sách Sản Phẩm Máy Tính</h1>
        
        <a href="{{ route('add') }}" class="add-link">+ Thêm sản phẩm mới</a>

        <div class="product-grid">
            <!-- Sản phẩm 1 -->
            <div class="product-card">
                <div class="product-image">💻</div>
                <div class="product-info">
                    <span class="badge sale">Giảm 15%</span>
                    <h3 class="product-name">MacBook Pro 14" M3 Pro</h3>
                    <p class="product-specs">
                        CPU: Apple M3 Pro 12-core<br>
                        RAM: 18GB | SSD: 512GB<br>
                        Màn hình: 14.2" Liquid Retina XDR
                    </p>
                    <div class="product-price">
                        42.990.000₫
                        <span>49.990.000₫</span>
                    </div>
                    <button class="btn-buy">Mua ngay</button>
                </div>
            </div>

            <!-- Sản phẩm 2 -->
            <div class="product-card">
                <div class="product-image">🖥️</div>
                <div class="product-info">
                    <span class="badge">Mới</span>
                    <h3 class="product-name">Dell XPS 15 9530</h3>
                    <p class="product-specs">
                        CPU: Intel Core i7-13700H<br>
                        RAM: 16GB | SSD: 512GB<br>
                        Màn hình: 15.6" OLED 3.5K
                    </p>
                    <div class="product-price">
                        38.500.000₫
                    </div>
                    <button class="btn-buy">Mua ngay</button>
                </div>
            </div>

            <!-- Sản phẩm 3 -->
            <div class="product-card">
                <div class="product-image">🎮</div>
                <div class="product-info">
                    <span class="badge sale">Hot</span>
                    <h3 class="product-name">ASUS ROG Strix G16</h3>
                    <p class="product-specs">
                        CPU: Intel Core i9-13980HX<br>
                        RAM: 32GB | SSD: 1TB<br>
                        GPU: RTX 4070 8GB
                    </p>
                    <div class="product-price">
                        52.990.000₫
                        <span>58.990.000₫</span>
                    </div>
                    <button class="btn-buy">Mua ngay</button>
                </div>
            </div>

            <!-- Sản phẩm 4 -->
            <div class="product-card">
                <div class="product-image">💼</div>
                <div class="product-info">
                    <span class="badge">Văn phòng</span>
                    <h3 class="product-name">HP Pavilion 15</h3>
                    <p class="product-specs">
                        CPU: AMD Ryzen 5 7530U<br>
                        RAM: 8GB | SSD: 256GB<br>
                        Màn hình: 15.6" FHD IPS
                    </p>
                    <div class="product-price">
                        13.990.000₫
                    </div>
                    <button class="btn-buy">Mua ngay</button>
                </div>
            </div>

            <!-- Sản phẩm 5 -->
            <div class="product-card">
                <div class="product-image">🖥️</div>
                <div class="product-info">
                    <span class="badge sale">Giảm 20%</span>
                    <h3 class="product-name">Lenovo ThinkPad X1 Carbon</h3>
                    <p class="product-specs">
                        CPU: Intel Core i7-1365U<br>
                        RAM: 16GB | SSD: 512GB<br>
                        Màn hình: 14" 2.8K OLED
                    </p>
                    <div class="product-price">
                        35.990.000₫
                        <span>44.990.000₫</span>
                    </div>
                    <button class="btn-buy">Mua ngay</button>
                </div>
            </div>

            <!-- Sản phẩm 6 -->
            <div class="product-card">
                <div class="product-image">🎨</div>
                <div class="product-info">
                    <span class="badge">Đồ họa</span>
                    <h3 class="product-name">MSI Creator Z16P</h3>
                    <p class="product-specs">
                        CPU: Intel Core i9-12900H<br>
                        RAM: 64GB | SSD: 2TB<br>
                        GPU: RTX 3080 Ti 16GB
                    </p>
                    <div class="product-price">
                        75.000.000₫
                    </div>
                    <button class="btn-buy">Mua ngay</button>
                </div>
            </div>

            <!-- Sản phẩm 7 -->
            <div class="product-card">
                <div class="product-image">📱</div>
                <div class="product-info">
                    <span class="badge">2-in-1</span>
                    <h3 class="product-name">Microsoft Surface Pro 9</h3>
                    <p class="product-specs">
                        CPU: Intel Core i5-1235U<br>
                        RAM: 8GB | SSD: 256GB<br>
                        Màn hình: 13" PixelSense Flow
                    </p>
                    <div class="product-price">
                        27.990.000₫
                    </div>
                    <button class="btn-buy">Mua ngay</button>
                </div>
            </div>

            <!-- Sản phẩm 8 -->
            <div class="product-card">
                <div class="product-image">⚡</div>
                <div class="product-info">
                    <span class="badge sale">Best Seller</span>
                    <h3 class="product-name">Acer Nitro 5 Gaming</h3>
                    <p class="product-specs">
                        CPU: Intel Core i5-12500H<br>
                        RAM: 16GB | SSD: 512GB<br>
                        GPU: RTX 4050 6GB
                    </p>
                    <div class="product-price">
                        22.990.000₫
                        <span>25.990.000₫</span>
                    </div>
                    <button class="btn-buy">Mua ngay</button>
                </div>
            </div>
        </div>

        @foreach  ($product as $p)
            <div>
                <h2>{{$p['name']}}</h2>
                <span>{{$p['price']}}</span>
            </div>
        @endforeach


    </div>
</body>
</html>