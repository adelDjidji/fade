<?php echo $header; ?>




<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/anchor/froala_editor_2.7.5/css/froala_editor.css">
<link rel="stylesheet" href="/anchor/froala_editor_2.7.5/css/froala_style.css">
<link rel="stylesheet" href="/anchor/froala_editor_2.7.5/css/plugins/code_view.css">
<link rel="stylesheet" href="/anchor/froala_editor_2.7.5/css/plugins/draggable.css">
<link rel="stylesheet" href="/anchor/froala_editor_2.7.5/css/plugins/colors.css">
<link rel="stylesheet" href="/anchor/froala_editor_2.7.5/css/plugins/emoticons.css">
<link rel="stylesheet" href="/anchor/froala_editor_2.7.5/css/plugins/image_manager.css">
<link rel="stylesheet" href="/anchor/froala_editor_2.7.5/css/plugins/image.css">
<link rel="stylesheet" href="/anchor/froala_editor_2.7.5/css/plugins/line_breaker.css">
<link rel="stylesheet" href="/anchor/froala_editor_2.7.5/css/plugins/table.css">
<link rel="stylesheet" href="/anchor/froala_editor_2.7.5/css/plugins/char_counter.css">
<link rel="stylesheet" href="/anchor/froala_editor_2.7.5/css/plugins/video.css">
<link rel="stylesheet" href="/anchor/froala_editor_2.7.5/css/plugins/fullscreen.css">
<link rel="stylesheet" href="/anchor/froala_editor_2.7.5/css/plugins/file.css">
<link rel="stylesheet" href="/anchor/froala_editor_2.7.5/css/plugins/quick_insert.css">
<link rel="stylesheet" href="/anchor/froala_editor_2.7.5/css/plugins/help.css">
<link rel="stylesheet" href="/anchor/froala_editor_2.7.5/css/third_party/spell_checker.css">
<link rel="stylesheet" href="/anchor/froala_editor_2.7.5/css/plugins/special_characters.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">


<style>
    body {
        text-align: center;
    }

    div#editor {
        width: 81%;
        margin: auto;
        text-align: left;
    }

    .ss {
        background-color: red;
    }
</style>



<form method="post" action="<?php echo Uri::to('admin/posts/edit/' . $article->id); ?>" enctype="multipart/form-data" novalidate>

    <input name="token" type="hidden" value="<?php echo $token; ?>">

    <fieldset class="header">
        <div class="wrap">

            <aside class="buttons">
                <?php echo Form::button(__('global.save'), array(
                    'type' => 'submit',
                    'class' => 'btn'
                )); ?>

                <?php echo Html::link('admin/posts', __('global.cancel'), array(
                    'class' => 'btn cancel blue'
                )); ?>

                <?php echo Html::link('admin/posts/delete/' . $article->id, __('global.delete'), array(
                    'class' => 'btn delete red'
                )); ?>
            </aside>

            <?php echo Form::text('title', Input::previous('title', $article->title), array(
                'placeholder' => __('posts.title'),
                'autocomplete'=> 'off',
                'autofocus' => 'true'
            )); ?>

        </div>
    </fieldset>

    <fieldset class="main">
        <div class="wrap">

                <div id="editor">

                     <textarea id='edit' name="markdown" style="margin-top: 30px;" placeholder="Type some text">
                        <?php  echo $article->markdown; ?>
                      </textarea>

                </div>


            <?php
            /*echo Form::textarea('markdown', Input::previous('markdown', $article->markdown), array(
                'placeholder' => __('posts.content_explain')
            )); */?>

            <?php //echo $editor; ?>
        </div>
    </fieldset>

    <fieldset class="meta split">
        <div class="wrap">
            <p>
                <label for="label-slug"><?php echo __('posts.slug'); ?>:</label>
                <?php echo Form::text('slug', Input::previous('slug', $article->slug), array('id' => 'label-slug')); ?>
                <em><?php echo __('posts.slug_explain'); ?></em>
            </p>
            <p>
                <label><?php echo __('posts.time'); ?>:</label>
                <?php echo Form::text('created', Input::previous('created', $article->created)); ?>
                <em><?php echo __('posts.time_explain'); ?></em>
            </p>
            <p>
                <label for="description"><?php echo __('posts.description'); ?>:</label>
                <?php echo Form::textarea('description', Input::previous('description', $article->description)); ?>
                <em><?php echo __('posts.description_explain'); ?></em>
            </p>
            <p>
                <label for="label-status"><?php echo __('posts.status'); ?>:</label>
                <?php echo Form::select('status', $statuses, Input::previous('status', $article->status), array('id' => 'label-status')); ?>
                <em><?php echo __('posts.status_explain'); ?></em>
            </p>
            <p>
                <label for="label-category"><?php echo __('posts.category'); ?>:</label>
                <?php echo Form::select('category', $categories, Input::previous('category', $article->category), array('id' => 'label-category')); ?>
                <em><?php echo __('posts.category_explain'); ?></em>
            </p>
            <p>
                <label for="label-comments"><?php echo __('posts.allow_comments'); ?>:</label>
                <?php echo Form::checkbox('comments', 1, Input::previous('comments', $article->comments) == 1, array('id' => 'label-comments')); ?>
                <em><?php echo __('posts.allow_comments_explain'); ?></em>
            </p>
            <p>
                <label for="label-css"><?php echo __('posts.custom_css'); ?>:</label>
                <?php echo Form::textarea('css', Input::previous('css', $article->css), array('id' => 'label-css')); ?>
                <em><?php echo __('posts.custom_css_explain'); ?></em>
            </p>
            <p>
                <label for="label-js"><?php echo __('posts.custom_js'); ?>:</label>
                <?php echo Form::textarea('js', Input::previous('js', $article->js), array('id' => 'label-js')); ?>
                <em><?php echo __('posts.custom_js_explain'); ?></em>
            </p>
            <?php foreach ($fields as $field): ?>
            <p>
                <label for="extend_<?php echo $field->key; ?>"><?php echo $field->label; ?>:</label>
                <?php echo Extend::html($field); ?>
            </p>
            <?php endforeach; ?>
        </div>
    </fieldset>
</form>

<script src="<?php echo asset('anchor/views/assets/js/slug.js'); ?>"></script>
<script src="<?php echo asset('anchor/views/assets/js/dragdrop.js'); ?>"></script>
<script src="<?php echo asset('anchor/views/assets/js/upload-fields.js'); ?>"></script>
<script src="<?php echo asset('anchor/views/assets/js/text-resize.js'); ?>"></script>
<script src="<?php echo asset('anchor/views/assets/js/editor.js'); ?>"></script>
<script src="<?php echo asset('anchor/views/assets/js/autosave.js'); ?>"></script>
<script>
    $('textarea[name=markdown]').editor();
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>

<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/froala_editor.min.js" ></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/align.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/char_counter.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/code_beautifier.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/code_view.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/colors.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/draggable.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/emoticons.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/entities.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/file.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/font_size.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/font_family.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/fullscreen.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/image.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/image_manager.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/line_breaker.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/inline_style.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/link.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/lists.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/paragraph_format.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/paragraph_style.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/quick_insert.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/quote.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/table.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/save.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/url.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/video.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/help.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/print.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/third_party/spell_checker.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/special_characters.min.js"></script>
<script type="text/javascript" src="/anchor/froala_editor_2.7.5/js/plugins/word_paste.min.js"></script>

<script>
    $(function(){
        $('#edit').froalaEditor()
    });
</script>



<?php echo $footer; ?>
