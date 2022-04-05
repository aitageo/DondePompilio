#! por aitageo

fetch('http://localhost:8282/DondePompilio1.0/modal/insertar.php')
.then((response)=> response.json())
.then((json)=> console.log(json));