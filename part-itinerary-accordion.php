<?php if( have_rows('collapse') ): ?>

    <section class="safari-advice section-paddings--both">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="text-center">
                    <h2 class="bordered-title bordered-title--black"><?php the_field('collapse_title') ?></h2><!-- /.bordered-title bordered-title--black -->
                </div><!-- /.text-center -->
                <div class="panel-group section-paddings--top" id="accordion" role="tablist" aria-multiselectable="true">

                    <?php $collapse_row = 1; ?>
                    <?php while( have_rows('collapse') ): the_row(); ?>

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading1">
                                <h4 class="panel-title">
                                    <a<?php if($collapse_row == 1) echo ' class="collapsed"'; ?> role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $collapse_row; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $collapse_row; ?>">
                                        <?php the_sub_field('title') ?>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-<?php echo $collapse_row; ?>" class="panel-collapse collapse<?php if($collapse_row == 1) echo ' in'; ?>" role="tabpanel" aria-labelledby="heading1">
                                <div class="panel-body">
                                    <?php the_sub_field('content'); ?>
                                </div>
                            </div>
                        </div>

                        <?php $collapse_row++; ?>
                    <?php endwhile; ?>

                </div>
            </div><!-- /.col-md-8 col-md-offset-2 -->
        </div><!-- /.row -->
    </section><!-- /.safari-advice section-paddings--both -->

<?php endif; ?>