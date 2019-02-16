create table postos_funcionarios(
  id INT AUTO_INCREMENT PRIMARY KEY,
  funcionario_id INT,
  posto_id INT,
  validade date,

  FOREIGN KEY (funcionario_id) REFERENCES funcionarios(id),
  FOREIGN KEY (posto_id) REFERENCES postos(id)
)