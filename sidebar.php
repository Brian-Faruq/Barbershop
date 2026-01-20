<style>
.sidebar {
  position: fixed;
  top: 0;
  left: 0;
  width: 100px; /* dari 60px jadi 100px */
  height: 100vh;
  background: rgba(30, 30, 30, 0.9);
  backdrop-filter: blur(10px);
  border-right: 1px solid #444;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-between;
  padding-top: 30px;
  transition: width 0.3s ease;
  z-index: 999;
  overflow: hidden;
}

.sidebar:hover {
  width: 160px; /* dari 180px jadi 160px, menyesuaikan logo 130px */
}

  .logo-container {
  width: 100px; /* dari 80px jadi 100px */
  height: 100px;
  border-radius: 50%;
  overflow: hidden;
  transition: all 0.3s ease;
  margin-bottom: 40px;
}

.sidebar:hover .logo-container {
  width: 130px; /* dari 100px jadi 130px */
  height: 130px;
  border: 4px solid #00bfff;
  box-shadow: 0 0 12px #00bfff80;
}

  .logo-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: all 0.3s ease;
  }

  .sidebar a {
    color: #aaa;
    font-size: 22px;
    display: flex;
    align-items: center;
    gap: 12px;
    margin: 18px 0;
    width: 100%;
    padding: 10px 20px;
    text-decoration: none;
    transition: all 0.3s ease;
    white-space: nowrap;
  }

  .sidebar a:hover {
    color: #fff;
    background-color: #00bfff20;
    border-radius: 8px;
    box-shadow: 0 0 8px #00bfff70;
  }

  .sidebar a i {
    min-width: 30px;
    text-align: center;
  }

  .sidebar a span {
    display: none;
  }

  .sidebar:hover a span {
    display: inline-block;
  }

  .sidebar .middle-links {
    display: flex;
    flex-direction: column;
    justify-content: center;
    flex-grow: 1;
    margin-top: 50px;
  }

  .sidebar .middle-links a {
    margin: 10px 0;
  }

  .sidebar .middle-links .tambah-link {
    margin-top: auto;
  }
</style>

<div class="sidebar">
  <div class="logo-container">
    <img src="ixel__2_-removebg-preview.png" alt="Logo">
  </div>
  <div class="middle-links">
    <a href="index.php"><i class="fas fa-home"></i> <span>Beranda</span></a>
    <a href="list.php"><i class="fas fa-list"></i> <span>List</span></a>
    <a href="selesai.php"><i class="fas fa-check"></i> <span>Selesai</span></a>
    <a href="tambah.php" class="tambah-link"><i class="fas fa-plus"></i> <span>Tambah</span></a>
  </div>
</div>
