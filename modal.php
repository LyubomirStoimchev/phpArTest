<?php
    echo '
        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <h2>'.$headerText.'</h2>
                </div>
                <div class="modal-body">
                    <p>'.$content.'</p>
                </div>
                <div class="modal-footer">
                    <h3>'.$footerText.'</h3>
                </div>
            </div>
        </div>
    ';
?>