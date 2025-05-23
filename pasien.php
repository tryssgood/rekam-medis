<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Input Data Pasien</title>
  <style>
   body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      min-height: 100vh;
      background-image: url('../img/rumahsakit.png'); 
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .form-box {
      background-color:rgb(0, 0, 0);
      padding: 32px 24px 24px 24px;
      border-radius: 28px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.13);
      width: 100%;
      max-width: 700px;   /* Lebar box lebih kecil */
      min-width: 340px;
    }

    .form-box h2 {
      text-align: center;
      color: #fff;
      margin-bottom: 22px;
      font-size: 2rem;
      font-weight: bold;
      letter-spacing: 1px;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 16px;
    }

    .form-grid {
      display: flex;
      gap: 24px;
      justify-content: center;
      align-items: flex-start;
    }

    .form-col {
      flex: 1;
      display: flex;
      flex-direction: column;
      gap: 14px;
    }

    .form-row {
      display: flex;
      align-items: center;
      gap: 10px;
      min-height: 38px;
    }

    label {
      color: #fff;
      font-weight: bold;
      min-width: 120px;
      font-size: 1rem;
      flex-shrink: 0;
    }

    input, select, textarea {
      flex: 1;
      padding: 7px 8px;
      border: 1px solidrgb(232, 232, 232);
      border-radius: 5px;
      font-size: 1rem;
      box-sizing: border-box;
    }

    textarea {
      resize: vertical;
      min-height: 32px;
      max-height: 38px;
    }

    .form-actions {
      display: flex;
      justify-content: center;
      margin-top: 18px;
    }

    button {
      width: 180px;
      background-color: #537D5D;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 7px;
      font-size: 1.2rem;
      cursor: pointer;
    }

    button:hover {
      background-color:rgb(238, 243, 237);
    }

    @media (max-width: 900px) {
      .form-box {
        max-width: 98vw;
        min-width: unset;
        padding: 14px 2vw;
      }
      .form-grid {
        flex-direction: column;
        gap: 0;
      }
      .form-col {
        gap: 10px;
      }
    }

    @media (max-width: 600px) {
      .form-box {
        padding: 18px 5vw;
        min-width: unset;
        max-width: 98vw;
      }
      .form-row {
        flex-direction: column;
        align-items: stretch;
        gap: 4px;
      }
      label {
        min-width: unset;
      }
    }
  </style>
</head>
<body>
  <div class="background">
    <div class="form-box">
      <h2>Form Input Data Pasien</h2>
      <form action="proses_pasien.php" method="POST">
        <div class="form-grid">
          <div class="form-col">
            <div class="form-row">
              <label>Nama Pasien:</label>
              <input type="text" name="nama_passien" required>
            </div>
            <div class="form-row">
              <label>Jenis Kelamin:</label>
              <select name="jenis_kelamin" required>
                <option value="">--Pilih--</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
            <div class="form-row">
              <label>Agama:</label>
              <input type="text" name="agama" required>
            </div>
            <div class="form-row">
              <label>Tanggal Lahir:</label>
              <input type="date" name="ttl" required>
            </div>
            <div class="form-row">
              <label>Usia:</label>
              <input type="text" name="usia" required>
            </div>
            <div class="form-row"><!-- baris kosong agar sejajar --></div>
          </div>
          <div class="form-col">
            <div class="form-row">
              <label>Alamat:</label>
              <textarea name="alamat" required></textarea>
            </div>
            <div class="form-row">
              <label>No. KTP:</label>
              <input type="number" name="no_ktp" required>
            </div>
            <div class="form-row">
              <label>No. KK:</label>
              <input type="number" name="no_kk" required>
            </div>
            <div class="form-row">
              <label>Hub Keluarga:</label>
              <input type="number" name="hub_keluarga" required>
            </div>
          </div>
        </div>
        <div class="form-actions">
          <button type="submit">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
