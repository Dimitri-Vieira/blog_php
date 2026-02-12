<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?php echo $currentPost['title'] ?></h1>
            <p id="post-description"><?php echo $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?php echo $BASE_URL?>/img/<?php echo $currentPost['img'] ?>" alt="<?php echo $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut praesentium ratione assumenda dignissimos repellendus a numquam ipsa consequatur vitae, facere fugiat voluptas, dolor temporibus at. Illo dolorum veniam est dolores! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum esse quae repellat dicta! Rerum officia dicta cupiditate et iure, ratione facere aliquid modi sit quisquam quae molestias nemo aperiam id. Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt beatae consectetur nesciunt aspernatur laudantium, nemo exercitationem voluptate dolorem tempora repellat reiciendis ea recusandae cumque dignissimos veritatis reprehenderit aliquam sunt sit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod consequatur laborum non dolorum maxime eum molestiae ab. Quas nisi odio inventore delectus suscipit. Nam, inventore fugiat? Enim consectetur minima necessitatibus.</p>
            <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut praesentium ratione assumenda dignissimos repellendus a numquam ipsa consequatur vitae, facere fugiat voluptas, dolor temporibus at. Illo dolorum veniam est dolores! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum esse quae repellat dicta! Rerum officia dicta cupiditate et iure, ratione facere aliquid modi sit quisquam quae molestias nemo aperiam id. Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt beatae consectetur nesciunt aspernatur laudantium, nemo exercitationem voluptate dolorem tempora repellat reiciendis ea recusandae cumque dignissimos veritatis reprehenderit aliquam sunt sit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod consequatur laborum non dolorum maxime eum molestiae ab. Quas nisi odio inventore delectus suscipit. Nam, inventore fugiat? Enim consectetur minima necessitatibus.</p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?php echo $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?php echo $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>

<?php
    include_once("templates/footer.php");
?>