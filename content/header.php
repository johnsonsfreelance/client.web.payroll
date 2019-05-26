
<div class = "ci_container">
    <div class = "ci_top_header_wrapper ci_secondary_theme">
        <div class = "ci_info">

        </div>
        <div class = "ci_secondary_nav">
        </div>
    </div>
    <div id = "ci-main-header ci_primary_theme">
        <div class = "ci_logo_wrapper">
            <img />
        </div>
        <div class = "ci_nav_bar_wrapper">
            <ul>
                <?php 
                    foreach($nav_arr as &$value){
                        echo '<li>';
                        echo '<a href = "">'.$value.'</a>';
                        echo '</li>';
                    }
                ?>
                
                <li class = "ci_nav_have_child">
                    <ul class = "ci_mega_nav">
                        <li>
                            <a href = "">home2-1</a>
                        </li><li>
                            <a href = "">home2-2</a>
                        </li>
                        <li>
                            <a href = "">home2-3</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class = "ci_search_wrapper">

        </div>
    </div>
    <div class = "">

    </div>
</div>