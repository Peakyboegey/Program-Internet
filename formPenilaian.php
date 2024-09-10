<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Nilai Baru</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #CDE8E5;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .input-form {
      background-color: #F7EEDD;
      padding: 25px;
      border-radius: 8px;
      max-width: 350px;
      width: 100%;
      box-sizing: border-box;
    }

    .input-label {
      font-weight: 700;
      margin-bottom: 10px;
      display: block;
      color: #555;
    }

    .input-field {
      width: 100%;
      padding: 4px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 15px;
      transition: border-color 0.3s;
    }

    .input-field:focus {
      border-color: #007BFF;
      outline: none;
    }

    .submit-btn {
      background-color: #7AB2B2;
      color: #fff;
      padding: 12px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
      font-weight: 700;
      width: 100%;
      margin-top: 10px;
    }

    .submit-btn:hover {
      background-color: #0056b3;
    }

   
    .popup-modal {
      display: none;
      position: fixed;
      z-index: 10;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.6);
      justify-content: center;
      align-items: center;
    }

    .popup-content {
      background-color: #fff;
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      max-width: 350px;
      width: 100%;
      box-sizing: border-box;
      text-align: left;
    }

    .popup-content p {
      margin: 12px 0;
      font-size: 15px;
    }

    .popup-content strong {
      font-weight: 700;
    }

    .close-btn {
      color: #555;
      float: right;
      font-size: 22px;
      cursor: pointer;
    }
  </style>
</head>
<body>


<form id="formInputNilai" class="input-form">
  <label for="inputNama" class="input-label">Nama:</label>
  <input type="text" id="inputNama" name="inputNama" class="input-field" required>

  <label for="inputNim" class="input-label">NIM:</label>
  <input type="text" id="inputNim" name="inputNim" class="input-field" required>

  <label for="inputNilai" class="input-label">Nilai:</label>
  <input type="number" id="inputNilai" name="inputNilai" class="input-field" min="0" max="100" required>

  <input type="submit" class="submit-btn" value="Submit">
</form>


<div id="modalPopup" class="popup-modal">
  <div class="popup-content">
    <span class="close-btn">&times;</span>
    <p><strong>Nama:</strong> <span id="popupNama"></span></p>
    <p><strong>NIM:</strong> <span id="popupNim"></span></p>
    <p><strong>Nilai:</strong> <span id="popupNilai"></span></p>
    <p><strong>Grade:</strong> <span id="popupGrade"></span></p>
  </div>
</div>

<script>
  const formInput = document.getElementById('formInputNilai');
  const modalPopup = document.getElementById('modalPopup');
  const closeModalBtn = document.getElementsByClassName('close-btn')[0];
  const popupNama = document.getElementById('popupNama');
  const popupNim = document.getElementById('popupNim');
  const popupNilai = document.getElementById('popupNilai');
  const popupGrade = document.getElementById('popupGrade');

  formInput.addEventListener('submit', function(event) {
    event.preventDefault();

    const nama = document.getElementById('inputNama').value;
    const nim = document.getElementById('inputNim').value;
    const nilai = parseInt(document.getElementById('inputNilai').value);
    
    let grade;
    if (nilai >= 90) {
      grade = "A";
    } else if (nilai >= 80) {
      grade = "B+";
    } else if (nilai >= 70) {
      grade = "B";
    } else if (nilai >= 60) {
      grade = "C+";
    } else if (nilai >= 55) {
      grade = "C";
    } else if (nilai >= 50) {
      grade = "D";
    } else {
      grade = "E";
    }

    
    popupNama.textContent = nama;
    popupNim.textContent = nim;
    popupNilai.textContent = nilai;
    popupGrade.textContent = grade;

    
    modalPopup.style.display = 'flex';
  });

  
  closeModalBtn.onclick = function() {
    modalPopup.style.display = 'none';
  }

  
  window.onclick = function(event) {
    if (event.target == modalPopup) {
      modalPopup.style.display = 'none';
    }
  }
</script>

</body>
</html>
