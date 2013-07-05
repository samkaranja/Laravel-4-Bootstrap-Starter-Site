<?php

/**
 * Interface for the Comment model repositories.
 */
interface CommentRepositoryInterface extends BaseRepositoryInterface
{

	public function findByPostDesc($postId);

}