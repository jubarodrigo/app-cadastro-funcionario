create table postos(
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome varchar(255),
  setor_id INT,
  tipo_id INT,
  FOREIGN KEY (setor_id) REFERENCES postos_setor(id),
  FOREIGN KEY (tipo_id) REFERENCES postos_tipo(id)
)