<?php
class alternatif{
	
	private $conn;
	private $table_name = "alternatif";
	
	public $id;
	public $nm;
	public $bb;
	
	public function __construct($db){
		$this->conn = $db;
	}
	
	function insert(){
		
		$query = "insert into ".$this->table_name." values(?,?,'','')";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->id);
		$stmt->bindParam(2, $this->nm);
		
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
		
	}
	
	function readAll(){

		$query = "SELECT * FROM ".$this->table_name." ORDER BY id_alternatif DESC";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}
	function countAll(){

		$query = "SELECT * FROM ".$this->table_name." ORDER BY id_alternatif DESC";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt->rowCount();
	}
	
	function readOne(){
		
		$query = "SELECT * FROM " . $this->table_name . " WHERE id_alternatif=? LIMIT 0,1";

		$stmt = $this->conn->prepare( $query );
		$stmt->bindParam(1, $this->id);
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		
		$this->id = $row['id_alternatif'];
		$this->nm = $row['nama_lengkap'];
		$this->bb = $row['tempat_lahir'];
	}
	function readSatu($a){
		
		$query = "SELECT * FROM " . $this->table_name . " WHERE id_alternatif='$a' LIMIT 0,1";

		$stmt = $this->conn->prepare( $query );
		$stmt->execute();

		return $stmt;
	}
	
	// update the product
	function update(){

		$query = "UPDATE 
					" . $this->table_name . " 
				SET 
					nama_lengkap = :nm
				WHERE
					id_alternatif = :id";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':nm', $this->nm);
		$stmt->bindParam(':id', $this->id);
		
		// execute the query
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	
	// delete the product
	function delete(){
	
		$query = "DELETE FROM " . $this->table_name . " WHERE id_alternatif = ?";
		
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->id);

		if($result = $stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	function hapusell($ax){
	
		$query = "DELETE FROM " . $this->table_name . " WHERE id_alternatif in $ax";
		
		$stmt = $this->conn->prepare($query);

		if($result = $stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
}
?>