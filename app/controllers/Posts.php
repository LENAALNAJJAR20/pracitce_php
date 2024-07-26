<?php
class Posts extends Controller
{
    public function __construct()
    {
        if (!isloggedin()) {
            redirect('users/login');
        }
        $this->postModel = $this->model('Post');
        $this->userModel = $this->model('User');
    }

    public function index()
    {

        //GET posts
        $posts = $this->postModel->getPosts();
        $data = [
            'posts' => $posts

        ];
        $this->view('posts/index', $data);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [

                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'user_id' => $_SESSION['user_id'],
                'title_err' => '',
                'body_err' => '',
            ];
            if (empty($data['title'])) {
                $data['title_err'] = 'Please enter title';
            }
            if (empty($data['body'])) {
                $data['body_err'] = 'Please enter body text';
            }
            // make sure not error
            if (empty($data['title_err']) && empty($data['body_err'])) {
                if ($this->postModel->addPost($data)) {
                    flash('Post_message', 'post Added');
                    redirect('posts');
                } else {
                    die("something went wrong");

                }
            } else {
                // load views with error
                $this->view('posts/add', $data);
            }
        } else {
            $data = [
                'title' => '',
                'body' => ''
            ];
            $this->view('posts/add', $data);
        }
    }


    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                  'id' => $id,
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'user_id' => $_SESSION['user_id'],
                'title_err' => '',
                'body_err' => '',
            ];
            if (empty($data['title'])) {
                $data['title_err'] = 'Please enter title';
            }
            if (empty($data['body'])) {
                $data['body_err'] = 'Please enter body text';
            }
            // make sure not error
            if (empty($data['title_err']) && empty($data['body_err'])) {
                if ($this->postModel->updatePost($data)) {
                    flash('Post_message', 'post Updated');
                    redirect('posts');
                } else {
                    die("something went wrong");

                }
            } else {
                // load views with error
                $this->view('posts/edit', $data);
            }
        } else {
            //get existing post from model
            $post = $this->postModel->getPostById($id);
            // check for onwer
    if($post->user_id != $_SESSION['user_id']){
    redirect('posts');
}
            $data = [
                'id' => $id,
                'title' => $post->title,
                'body' => $post->body
            ];
            $this->view('posts/edit', $data);
        }
    }




        public function show($id)
        {
            $post =$this->postModel->getPostById($id);

           $user = $this->userModel->getUserById($post->user_id);
            $data = [
                'post' => $post,
                  'user'=> $user
            ];
            $this->view('posts/show', $data);
        }
        public function delete($id){
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //get existing post from model
                $post = $this->postModel->getPostById($id);
                // check for onwer
                if($post->user_id != $_SESSION['user_id']){
                    redirect('posts');
                }

                if ($this->postModel->deletePost($id)) {
                    flash('Post_message', 'post Removed');
                    redirect('posts');
                } else {
                    die("something went wrong");

                }
            } else {
                redirect('posts');
            }
            }

}


?>