<?php

/**
 * Enroll Now Modal
 * @package Vertex Education
 * @version 1.0.0
 */
?>

<div class="modal fade section-blue " id="enrollnow" tabindex="-1" role="dialog" aria-labelledby="enrollnowLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content animate-bottom">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="col-12">
                        <div class="modal-body">
                            <h3>Enrolling Now for 2021-2022</h3>
                            <h2>Start Your Legacy</h2>
                        </div>
                    </div>
                    <div class="offset-1 col-10 pt-4">
                        <div class="modal-body">
                            <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>