<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm máy tính</title>
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
            min-height: 100vh;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 2rem;
        }
        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background: #6c757d;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
            transition: background 0.3s;
        }
        .back-link:hover {
            background: #5a6268;
        }
        .form-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
        }
        .form-group label .required {
            color: #e74c3c;
        }
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        .form-control:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }
        textarea.form-control {
            resize: vertical;
            min-height: 100px;
        }
        select.form-control {
            cursor: pointer;
        }
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        @media (max-width: 600px) {
            .form-row {
                grid-template-columns: 1fr;
            }
        }
        .form-section {
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        .form-section:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }
        .section-title {
            font-size: 1.2rem;
            color: #667eea;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .btn-submit {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: opacity 0.3s, transform 0.2s;
        }
        .btn-submit:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }
        .btn-submit:active {
            transform: translateY(0);
        }
        .input-group {
            position: relative;
        }
        .input-group .suffix {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            font-weight: 500;
        }
        .input-group .form-control {
            padding-right: 50px;
        }
        .checkbox-group {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }
        .checkbox-item {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
        }
        .checkbox-item input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
        }
        .help-text {
            font-size: 0.85rem;
            color: #888;
            margin-top: 5px;
        }
        .image-preview {
            margin-top: 10px;
            padding: 20px;
            border: 2px dashed #ddd;
            border-radius: 8px;
            text-align: center;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🖥️ Thêm Sản Phẩm Máy Tính Mới</h1>
        
        <a href="{{ route('product') }}" class="back-link">← Quay lại danh sách</a>

        <div class="form-card">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                
                <!-- Thông tin cơ bản -->
                <div class="form-section">
                    <h3 class="section-title">📋 Thông tin cơ bản</h3>
                    
                    <div class="form-group">
                        <label for="name">Tên sản phẩm <span class="required">*</span></label>
                        <input type="text" id="name" name="name" class="form-control" 
                               placeholder="VD: MacBook Pro 14 inch M3 Pro" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="brand">Thương hiệu <span class="required">*</span></label>
                            <select id="brand" name="brand" class="form-control" required>
                                <option value="">-- Chọn thương hiệu --</option>
                                <option value="apple">Apple</option>
                                <option value="dell">Dell</option>
                                <option value="hp">HP</option>
                                <option value="lenovo">Lenovo</option>
                                <option value="asus">ASUS</option>
                                <option value="acer">Acer</option>
                                <option value="msi">MSI</option>
                                <option value="microsoft">Microsoft</option>
                                <option value="other">Khác</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="category">Danh mục <span class="required">*</span></label>
                            <select id="category" name="category" class="form-control" required>
                                <option value="">-- Chọn danh mục --</option>
                                <option value="laptop">Laptop</option>
                                <option value="gaming">Laptop Gaming</option>
                                <option value="ultrabook">Ultrabook</option>
                                <option value="workstation">Workstation</option>
                                <option value="2in1">2-in-1 / Tablet</option>
                                <option value="desktop">PC Desktop</option>
                                <option value="all-in-one">All-in-One</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description">Mô tả sản phẩm</label>
                        <textarea id="description" name="description" class="form-control" 
                                  placeholder="Nhập mô tả chi tiết về sản phẩm..."></textarea>
                    </div>
                </div>

                <!-- Cấu hình phần cứng -->
                <div class="form-section">
                    <h3 class="section-title">⚙️ Cấu hình phần cứng</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="cpu">Bộ vi xử lý (CPU) <span class="required">*</span></label>
                            <input type="text" id="cpu" name="cpu" class="form-control" 
                                   placeholder="VD: Intel Core i7-13700H" required>
                        </div>

                        <div class="form-group">
                            <label for="ram">Dung lượng RAM <span class="required">*</span></label>
                            <select id="ram" name="ram" class="form-control" required>
                                <option value="">-- Chọn RAM --</option>
                                <option value="4">4 GB</option>
                                <option value="8">8 GB</option>
                                <option value="16">16 GB</option>
                                <option value="32">32 GB</option>
                                <option value="64">64 GB</option>
                                <option value="128">128 GB</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="storage_type">Loại ổ cứng</label>
                            <select id="storage_type" name="storage_type" class="form-control">
                                <option value="ssd">SSD NVMe</option>
                                <option value="ssd_sata">SSD SATA</option>
                                <option value="hdd">HDD</option>
                                <option value="hybrid">Hybrid (SSD + HDD)</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="storage">Dung lượng lưu trữ <span class="required">*</span></label>
                            <select id="storage" name="storage" class="form-control" required>
                                <option value="">-- Chọn dung lượng --</option>
                                <option value="128">128 GB</option>
                                <option value="256">256 GB</option>
                                <option value="512">512 GB</option>
                                <option value="1024">1 TB</option>
                                <option value="2048">2 TB</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="gpu">Card đồ họa (GPU)</label>
                        <input type="text" id="gpu" name="gpu" class="form-control" 
                               placeholder="VD: NVIDIA RTX 4070 8GB (để trống nếu dùng GPU tích hợp)">
                        <p class="help-text">Để trống nếu máy chỉ sử dụng card đồ họa tích hợp</p>
                    </div>
                </div>

                <!-- Màn hình -->
                <div class="form-section">
                    <h3 class="section-title">🖥️ Thông số màn hình</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="screen_size">Kích thước màn hình</label>
                            <div class="input-group">
                                <input type="number" id="screen_size" name="screen_size" class="form-control" 
                                       placeholder="VD: 15.6" step="0.1" min="10" max="32">
                                <span class="suffix">inch</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="resolution">Độ phân giải</label>
                            <select id="resolution" name="resolution" class="form-control">
                                <option value="">-- Chọn độ phân giải --</option>
                                <option value="hd">HD (1366 x 768)</option>
                                <option value="fhd">Full HD (1920 x 1080)</option>
                                <option value="2k">2K (2560 x 1440)</option>
                                <option value="4k">4K UHD (3840 x 2160)</option>
                                <option value="retina">Retina</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="panel_type">Loại tấm nền</label>
                            <select id="panel_type" name="panel_type" class="form-control">
                                <option value="">-- Chọn loại tấm nền --</option>
                                <option value="ips">IPS</option>
                                <option value="oled">OLED</option>
                                <option value="va">VA</option>
                                <option value="tn">TN</option>
                                <option value="mini_led">Mini LED</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="refresh_rate">Tần số quét</label>
                            <select id="refresh_rate" name="refresh_rate" class="form-control">
                                <option value="60">60 Hz</option>
                                <option value="90">90 Hz</option>
                                <option value="120">120 Hz</option>
                                <option value="144">144 Hz</option>
                                <option value="165">165 Hz</option>
                                <option value="240">240 Hz</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Giá và khuyến mãi -->
                <div class="form-section">
                    <h3 class="section-title">💰 Giá bán & Khuyến mãi</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="price">Giá bán <span class="required">*</span></label>
                            <div class="input-group">
                                <input type="number" id="price" name="price" class="form-control" 
                                       placeholder="VD: 25990000" min="0" required>
                                <span class="suffix">₫</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="original_price">Giá gốc (nếu có giảm giá)</label>
                            <div class="input-group">
                                <input type="number" id="original_price" name="original_price" class="form-control" 
                                       placeholder="VD: 29990000" min="0">
                                <span class="suffix">₫</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="quantity">Số lượng tồn kho <span class="required">*</span></label>
                            <input type="number" id="quantity" name="quantity" class="form-control" 
                                   placeholder="VD: 50" min="0" required>
                        </div>

                        <div class="form-group">
                            <label for="warranty">Bảo hành</label>
                            <select id="warranty" name="warranty" class="form-control">
                                <option value="12">12 tháng</option>
                                <option value="24">24 tháng</option>
                                <option value="36">36 tháng</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Hình ảnh và trạng thái -->
                <div class="form-section">
                    <h3 class="section-title">📸 Hình ảnh & Trạng thái</h3>
                    
                    <div class="form-group">
                        <label for="image">Hình ảnh sản phẩm</label>
                        <input type="file" id="image" name="image" class="form-control" 
                               accept="image/*">
                        <div class="image-preview">
                            📷 Kéo thả hoặc click để chọn hình ảnh
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Nhãn sản phẩm</label>
                        <div class="checkbox-group">
                            <label class="checkbox-item">
                                <input type="checkbox" name="labels[]" value="new">
                                <span>Mới</span>
                            </label>
                            <label class="checkbox-item">
                                <input type="checkbox" name="labels[]" value="hot">
                                <span>Hot</span>
                            </label>
                            <label class="checkbox-item">
                                <input type="checkbox" name="labels[]" value="sale">
                                <span>Giảm giá</span>
                            </label>
                            <label class="checkbox-item">
                                <input type="checkbox" name="labels[]" value="bestseller">
                                <span>Best Seller</span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="status">Trạng thái</label>
                        <select id="status" name="status" class="form-control">
                            <option value="1">Đang bán</option>
                            <option value="0">Ngừng bán</option>
                            <option value="2">Hết hàng</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn-submit">
                    ✓ Thêm sản phẩm
                </button>
            </form>
        </div>
    </div>
</body>
</html>