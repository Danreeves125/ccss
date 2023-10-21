<?php 
    $bg ='';

    switch($field['background_colour']) {
        case 1 :
            $bg = '#fff';
            break;
        case 2 :
            $bg = '#EDEDED';
            break;
        case 3 :
            break;
        
    }
?>
<section class="stepsBlock" style="background: <?=$bg?>">
    <div class="container">
        <h2 class="a-title a-title--black"><?=$field['title']?></h2>
        <div class="stepsBlock__text-top">
            <p><?= $field['text']?></p>
        </div>

        <div class="stepsBlock__steps">
            <?php foreach($field['steps'] as $key => $step) : ?>
                <div class="stepsBlock__step">
                    <div class="icon">
                        <?php if($key == 7) : ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="22.371" viewBox="0 0 30 22.371">
                                <path id="Path_658" data-name="Path 658" d="M-4.811-.5a1.5,1.5,0,0,0,2.121,0l17.25-17.25a1.5,1.5,0,0,0,0-2.121L12.439-22a1.5,1.5,0,0,0-2.121,0L-3.75-7.928-10.318-14.5a1.5,1.5,0,0,0-2.121,0l-2.121,2.121a1.5,1.5,0,0,0,0,2.121Z" transform="translate(15 22.436)" fill="#fff"/>
                            </svg>
                        <?php else : ?>
                            <?=$key + 1?>
                        <?php endif; ?>
                    </div>
                    <p><?=$step['text'];?></p>
                </div>
            <?php endforeach; ?>
             
            <div class="stepsBlock__step--button">
                <?php if($field['url_or_file'] == 'file') : ?>
                    <a href="<?=$field['button_file']['url']?>" class="button" download>
                <?php else : ?>
                    <a href="<?=$field['button_url']?>" class="button">
                <?php endif; ?>
                    <?=$field['button_text']?>

                    <svg xmlns="http://www.w3.org/2000/svg" width="10.5" height="10.379" viewBox="0 0 10.5 10.379">
                        <path id="Label" d="M-.138-9.607-.6-9.143a.281.281,0,0,0,0,.4L3.034-5.109h-8a.281.281,0,0,0-.281.281v.656a.281.281,0,0,0,.281.281h8L-.6-.255a.281.281,0,0,0,0,.4l.464.464a.281.281,0,0,0,.4,0L5.168-4.3a.281.281,0,0,0,0-.4L.259-9.607A.281.281,0,0,0-.138-9.607Z" transform="translate(5.25 9.689)" fill="#fff" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>