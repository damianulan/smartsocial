<? php

class Comment extends Db{
	function getAllContent(){
		$this->getAll("comment", "content");
	}

	function getOneContent($id){
		$this->getOne("comment", "content", $id);
	}

	function getAllCreatedAt(){
		$this->getAll("comment", "created_at");
	}

	function getOneCreatedAt($id){
		$this->getAll("comment", "created_at", $id);
	}

	function getAllUpdatedAt(){
		$this->getAll("comment", "updated_at");
	}

	function getOneUpdatedAt($id){
		$this->getAll("comment", "updated_at", $id);
	}
}