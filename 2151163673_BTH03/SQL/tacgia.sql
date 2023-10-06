CREATE TABLE Sach (
  id INT AUTO_INCREMENT PRIMARY KEY,
  tenSach VARCHAR(255),
  namXuatBan INT,
  idTacGia INT,
  FOREIGN KEY (idTacGia) REFERENCES TacGia(id)
);