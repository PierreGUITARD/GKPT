<?php 
/* * * * * * * * * * * * * * *
* Renvoie tous les articles publiés
* * * * * * * * * * * * * * */
function getPublishedPosts() {
	// utilise l'objet global $connect  pour la connexion à la base de données
	global $connect;
	
	// construction de la requête
	$sql = "SELECT * FROM produits";
	
	// envoie de la requete
	$result = mysqli_query($connect, $sql);
	
	// récupère tous les messages sous la forme d’un tableau $final_posts

	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ($posts as $post) {
		$post['categorie'] = getPostTopic($post['id']); // obtenir la caégorie d'un produit
		array_push($final_posts, $post);
	}
	return $final_posts;
}
/* * * * * * * * * * * * * * *
* Réçoit l'id d'un post et 
* renvoi sa catégorie (topic)
* * * * * * * * * * * * * * */
function getPostTopic($post_id){ //post_id correspond  à l'iD d'in produit
	global $connect;
	$sql = "SELECT * FROM categorie WHERE id=
			(SELECT idcategorie FROM produit_categorie WHERE idproduit = $post_id) LIMIT 1";
	$result = mysqli_query($connect, $sql);
	$topic = mysqli_fetch_assoc($result);
	return $topic;
}
/* * * * * * * * * * * * * * *
* Renvoi un post à partir 
* de son intitulé
* * * * * * * * * * * * * * */
function getPost($slug){
	global $connect;
	// Renvoi un post à partir de son l'intitulé 
	$post_slug = $_GET['post-slug'];
	$sql = "SELECT * FROM posts WHERE slug='$post_slug' AND published=true";
	$result = mysqli_query($connect, $sql);

	// Récupère tous les résultats dans un tableau (array).
	$post = mysqli_fetch_assoc($result);
	if ($post) {
		// récupère la catégorie du post
		$post['topic'] = getPostTopic($post['id']);
	}
	return $post;
}
/* * * * * * * * * * * * * * * *
*  Renvoi toutes les catégories
* * * * * * * * * * * * * * * * */
function getAllTopics()
{
	global $connect;
	$sql = "SELECT * FROM produits";
	$result = mysqli_query($connect, $sql);
	$topics = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $topics;

}
/* * * * * * * * * * * * * * * * *
* Renvoi tous les articles de la
* catégorie dont l'id est donné
* * * * * * * * * * * * * * * * */
function getPublishedPostsByTopic($topic_id) {
	global $connect;
	$sql = "SELECT * FROM posts ps 
			WHERE ps.id IN 
			(SELECT pt.post_id FROM post_topic pt 
				WHERE pt.topic_id=$topic_id GROUP BY pt.post_id 
				HAVING COUNT(1) = 1)";
	$result = mysqli_query($connect, $sql);
	//  récupère tous les posts et les sauvegarde dans un tableau $posts
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ($posts as $post) {
		$post['topic'] = getPostTopic($post['id']); 
		array_push($final_posts, $post);
	}
	return $final_posts;
}
/* * * * * * * * * * * * * * * *
* Renvoi le nom de la catégorie 
* à partir de son id 
* * * * * * * * * * * * * * * * */
function getTopicNameById($id)
{
	global $connect;
	$sql = "SELECT name FROM topics WHERE id=$id";
	$result = mysqli_query($connect, $sql);
	$topic = mysqli_fetch_assoc($result);
	return $topic['name'];
}
?>
