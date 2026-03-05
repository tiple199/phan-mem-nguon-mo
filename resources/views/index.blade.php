<!doctype html>
<html lang="vi">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Shop Laptop</title>
  <style>
    :root{
  --bg:#0b0f17;
  --card:#111827;
  --muted:#94a3b8;
  --text:#e5e7eb;
  --line:rgba(148,163,184,.18);
  --shadow: 0 10px 30px rgba(0,0,0,.35);
  --radius: 16px;
}

*{ box-sizing:border-box; }
html,body{ height:100%; }
body{
  margin:0;
  font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Arial, "Apple Color Emoji","Segoe UI Emoji";
  background: radial-gradient(900px 500px at 20% -10%, rgba(59,130,246,.22), transparent 60%),
              radial-gradient(900px 500px at 90% 0%, rgba(34,197,94,.16), transparent 55%),
              var(--bg);
  color:var(--text);
}

.container{
  width:min(1100px, 92vw);
  margin:0 auto;
}

.topbar{
  position: sticky;
  top: 0;
  z-index: 10;
  backdrop-filter: blur(10px);
  background: rgba(11,15,23,.65);
  border-bottom: 1px solid var(--line);
}
.topbar__inner{
  display:flex;
  align-items:center;
  justify-content:space-between;
  gap:16px;
  padding:14px 0;
}

.brand{ display:flex; align-items:center; gap:12px; }
.brand__logo{
  width:40px; height:40px;
  border-radius: 12px;
  display:grid; place-items:center;
  font-weight:800;
  background: linear-gradient(135deg, rgba(59,130,246,.95), rgba(34,197,94,.75));
  box-shadow: var(--shadow);
}
.brand__name{ font-weight:800; letter-spacing:.2px; }
.brand__sub{ font-size:12px; color:var(--muted); margin-top:2px; }

.actions{
  display:flex;
  gap:10px;
  flex-wrap:wrap;
  justify-content:flex-end;
}
.field{ display:flex; flex-direction:column; gap:6px; }
.label{ font-size:12px; color:var(--muted); }

.select{
  appearance:none;
  border:1px solid var(--line);
  background: rgba(17,24,39,.7);
  color: var(--text);
  padding:10px 34px 10px 12px;
  border-radius: 12px;
  outline:none;
  min-width: 150px;
  box-shadow: 0 1px 0 rgba(255,255,255,.05) inset;
  cursor:pointer;
  background-image:
    linear-gradient(45deg, transparent 50%, rgba(229,231,235,.75) 50%),
    linear-gradient(135deg, rgba(229,231,235,.75) 50%, transparent 50%);
  background-position:
    calc(100% - 16px) 55%,
    calc(100% - 11px) 55%;
  background-size: 6px 6px, 6px 6px;
  background-repeat:no-repeat;
}
.select:focus{ border-color: rgba(59,130,246,.6); }

.hero{
  margin: 18px 0 14px;
  padding: 18px;
  border:1px solid var(--line);
  border-radius: var(--radius);
  background: rgba(17,24,39,.55);
  box-shadow: var(--shadow);
  display:flex;
  gap:16px;
  align-items:stretch;
  justify-content:space-between;
  flex-wrap:wrap;
}
.hero__left{ flex: 1 1 420px; }
.hero h1{ margin:0 0 8px; font-size: 22px; }
.hero p{ margin:0; color: var(--muted); line-height:1.5; }

.chips{ margin-top: 12px; display:flex; gap:8px; flex-wrap:wrap; }
.chip{
  font-size:12px;
  color: rgba(229,231,235,.9);
  border:1px solid var(--line);
  background: rgba(11,15,23,.35);
  padding:7px 10px;
  border-radius: 999px;
}

.hero__right{
  display:flex;
  gap:10px;
  flex: 0 1 auto;
  align-items:stretch;
}
.stat{
  min-width: 110px;
  border:1px solid var(--line);
  border-radius: 14px;
  padding: 10px 12px;
  background: rgba(11,15,23,.35);
}
.stat__num{ font-weight:900; font-size:18px; }
.stat__txt{ color: var(--muted); font-size:12px; margin-top:4px; }

.grid{
  display:grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 12px;
  padding: 10px 0 26px;
}

/* Card "nhẹ": kích thước nhỏ, ít padding */
.card{
  border: 1px solid var(--line);
  border-radius: var(--radius);
  overflow:hidden;
  background: rgba(17,24,39,.55);
  box-shadow: 0 6px 18px rgba(0,0,0,.25);
  transition: transform .15s ease, border-color .15s ease;
}
.card:hover{
  transform: translateY(-2px);
  border-color: rgba(59,130,246,.45);
}

.card__thumb{
  height: 86px;
  position: relative;
  background:
    radial-gradient(120px 60px at 20% 30%, rgba(59,130,246,.35), transparent 60%),
    radial-gradient(140px 70px at 80% 20%, rgba(34,197,94,.25), transparent 60%),
    rgba(2,6,23,.35);
  border-bottom: 1px solid var(--line);
}

.badge{
  position:absolute;
  top:10px; left:10px;
  font-size:11px;
  padding:6px 9px;
  border-radius: 999px;
  border:1px solid var(--line);
  background: rgba(17,24,39,.55);
}
.badge--blue{ background: rgba(59,130,246,.15); }
.badge--red{ background: rgba(239,68,68,.15); }
.badge--green{ background: rgba(34,197,94,.15); }

.card__body{ padding: 10px 12px 12px; }
.card__title{
  margin:0;
  font-size: 14px;
  letter-spacing:.1px;
}
.card__meta{
  margin:6px 0 10px;
  color: var(--muted);
  font-size: 12px;
  line-height: 1.35;
}

.card__row{
  display:flex;
  align-items:center;
  justify-content:space-between;
  gap:10px;
}
.price{
  font-weight:900;
  font-size: 14px;
}

.btn{
  border:1px solid rgba(59,130,246,.6);
  background: rgba(59,130,246,.14);
  color: var(--text);
  padding: 8px 10px;
  border-radius: 12px;
  cursor:pointer;
  font-weight:700;
  font-size: 12px;
}
.btn:hover{ border-color: rgba(59,130,246,.9); }

.footer{
  border-top: 1px solid var(--line);
  background: rgba(11,15,23,.7);
}
.footer__inner{
  padding: 14px 0;
  display:flex;
  justify-content:space-between;
  gap:12px;
  flex-wrap:wrap;
}
.footer__muted{ color: var(--muted); font-size: 12px; }

/* Responsive */
@media (max-width: 900px){
  .grid{ grid-template-columns: repeat(2, minmax(0, 1fr)); }
}
@media (max-width: 560px){
  .grid{ grid-template-columns: 1fr; }
  .select{ min-width: 140px; }
}
  </style>
    
</head>
<body>
  <header class="topbar">
    <div class="container topbar__inner">
      <div class="brand">
        <div class="brand__logo">L</div>
        <div class="brand__text">
          <div class="brand__name">Laptop Store</div>
          <div class="brand__sub">Chọn nhanh • Mua gọn</div>
        </div>
      </div>

      <div class="actions">
        <div class="field">
          <label class="label" for="brand">Hãng</label>
          <select id="brand" class="select">
            <option>Tất cả</option>
            <option>Apple</option>
            <option>Dell</option>
            <option>HP</option>
            <option>Lenovo</option>
            <option>ASUS</option>
          </select>
        </div>

        <div class="field">
          <label class="label" for="price">Giá</label>
          <select id="price" class="select">
            <option>Tất cả</option>
            <option>Dưới 15 triệu</option>
            <option>15–25 triệu</option>
            <option>Trên 25 triệu</option>
          </select>
        </div>

        <div class="field">
          <label class="label" for="sort">Sắp xếp</label>
          <select id="sort" class="select">
            <option>Mới nhất</option>
            <option>Giá tăng dần</option>
            <option>Giá giảm dần</option>
            <option>Bán chạy</option>
          </select>
        </div>
      </div>
    </div>
  </header>

  <main class="container">
    <section class="hero">
      <div class="hero__left">
        <h1>Chọn laptop phù hợp trong vài giây</h1>
        <p>Lọc theo hãng, mức giá và sắp xếp nhanh. Giao diện tối giản, thẻ sản phẩm nhỏ gọn.</p>
        <div class="chips">
          <span class="chip">Mỏng nhẹ</span>
          <span class="chip">Văn phòng</span>
          <span class="chip">Gaming</span>
          <span class="chip">Đồ hoạ</span>
        </div>
      </div>
      <div class="hero__right">
        <div class="stat">
          <div class="stat__num">48+</div>
          <div class="stat__txt">Mẫu laptop</div>
        </div>
        <div class="stat">
          <div class="stat__num">24h</div>
          <div class="stat__txt">Giao nhanh</div>
        </div>
        <div class="stat">
          <div class="stat__num">12m</div>
          <div class="stat__txt">Bảo hành</div>
        </div>
      </div>
    </section>

    <section class="grid">
      <!-- Card 1 -->
      <article class="card">
        <div class="card__thumb" aria-hidden="true">
          <span class="badge">Mỏng nhẹ</span>
        </div>
        <div class="card__body">
          <h3 class="card__title">MacBook Air 13" M2</h3>
          <p class="card__meta">8GB • 256GB • 1.24kg</p>
          <div class="card__row">
            <div class="price">24.990.000₫</div>
            <button class="btn">Mua</button>
          </div>
        </div>
      </article>

      <!-- Card 2 -->
      <article class="card">
        <div class="card__thumb" aria-hidden="true">
          <span class="badge badge--blue">Văn phòng</span>
        </div>
        <div class="card__body">
          <h3 class="card__title">Dell Inspiron 14</h3>
          <p class="card__meta">i5 • 16GB • 512GB</p>
          <div class="card__row">
            <div class="price">18.490.000₫</div>
            <button class="btn">Mua</button>
          </div>
        </div>
      </article>

      <!-- Card 3 -->
      <article class="card">
        <div class="card__thumb" aria-hidden="true">
          <span class="badge badge--red">Gaming</span>
        </div>
        <div class="card__body">
          <h3 class="card__title">ASUS TUF Gaming</h3>
          <p class="card__meta">R7 • 16GB • RTX • 144Hz</p>
          <div class="card__row">
            <div class="price">26.990.000₫</div>
            <button class="btn">Mua</button>
          </div>
        </div>
      </article>

      <!-- Card 4 -->
      <article class="card">
        <div class="card__thumb" aria-hidden="true">
          <span class="badge badge--green">Đồ hoạ</span>
        </div>
        <div class="card__body">
          <h3 class="card__title">Lenovo IdeaPad Pro</h3>
          <p class="card__meta">i7 • 16GB • 1TB • 2.5K</p>
          <div class="card__row">
            <div class="price">29.990.000₫</div>
            <button class="btn">Mua</button>
          </div>
        </div>
      </article>

      <!-- Card 5 -->
      <article class="card">
        <div class="card__thumb" aria-hidden="true">
          <span class="badge badge--blue">Văn phòng</span>
        </div>
        <div class="card__body">
          <h3 class="card__title">HP Pavilion 15</h3>
          <p class="card__meta">i5 • 8GB • 512GB</p>
          <div class="card__row">
            <div class="price">16.990.000₫</div>
            <button class="btn">Mua</button>
          </div>
        </div>
      </article>

      <!-- Card 6 -->
      <article class="card">
        <div class="card__thumb" aria-hidden="true">
          <span class="badge">Mỏng nhẹ</span>
        </div>
        <div class="card__body">
          <h3 class="card__title">ASUS Zenbook 14</h3>
          <p class="card__meta">i5 • 16GB • 512GB • 1.3kg</p>
          <div class="card__row">
            <div class="price">22.490.000₫</div>
            <button class="btn">Mua</button>
          </div>
        </div>
      </article>
    </section>
  </main>

  <footer class="footer">
    <div class="container footer__inner">
      <span>© Laptop Store</span>
      <span class="footer__muted">Hotline: 1900 0000 • Hỗ trợ 8:00–21:00</span>
    </div>
  </footer>
</body>
</html>