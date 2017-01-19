<?php

namespace App\Models\Post;

/**
 * This is the model if you want to get posts of the default post type.
 *
 * Class DefaultPost
 * @package App\Models|Post
 */
class DefaultPost extends WP_Post
{
	/**
	 * PostModel constructor.
	 *
	 * Set all the arguments that are default for this Model
	 */
	public function __construct()
	{
		$this->type('post');
	}
}