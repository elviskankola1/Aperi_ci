<div class="form-body">
    <form action="<?= base_url()?>rooms/dataAndMailing" method="POST">
        <div class="row">
            <div class="img-holder">
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1500 1500"><defs><style>.cls-1{fill:none;}.cls-2{clip-path:url(#clip-path);}.cls-3{fill:#4753a4;}.cls-4{fill:#fff;}.cls-5{fill:#f7fcfe;}</style><clipPath id="clip-path"><rect class="cls-1" x="-4.03" y="-4.97" width="1508.05" height="1508.05"/></clipPath></defs><title>Aperi</title><g class="cls-2"><rect class="cls-3" x="-4.03" y="-4.97" width="1508.05" height="1508.05"/><polygon class="cls-4" points="602.14 352.74 602.14 1145.38 775.71 1145.38 775.71 408.67 1088.14 352.74 602.14 352.74"/><path class="cls-4" d="M445.67,1103.94v23.17h-3.36v-6.51c-2.31,4.2-6.79,6.79-13.16,6.79-8.19,0-13.16-4.2-13.16-10.43,0-5.53,3.5-10.22,13.65-10.22h12.53v-2.94c0-6.79-3.71-10.43-10.85-10.43a19,19,0,0,0-12.6,4.62l-1.75-2.52a22.29,22.29,0,0,1,14.63-5.18C440.63,1090.29,445.67,1094.91,445.67,1103.94Zm-3.5,12.39v-6.86H429.71c-7.56,0-10.22,3.15-10.22,7.35,0,4.76,3.71,7.7,10.15,7.7C435.8,1124.52,440.07,1121.58,442.17,1116.33Z"/><path class="cls-4" d="M496.49,1108.84c0,11-7.77,18.55-18.06,18.55a16.36,16.36,0,0,1-14.84-8.61v21.91h-3.5v-50.12h3.36v8.61a16.33,16.33,0,0,1,15-8.89C488.72,1090.29,496.49,1097.92,496.49,1108.84Zm-3.5,0c0-9.17-6.37-15.4-14.77-15.4s-14.7,6.23-14.7,15.4,6.3,15.4,14.7,15.4S493,1118,493,1108.84Z"/><path class="cls-4" d="M538.21,1109.68H506.78c.35,8.68,6.72,14.56,15.47,14.56a14.74,14.74,0,0,0,11.69-5.11l2,2.31c-3.22,3.92-8.26,6-13.79,6-11.06,0-18.83-7.7-18.83-18.55s7.49-18.55,17.5-18.55,17.43,7.56,17.43,18.41C538.28,1109,538.21,1109.33,538.21,1109.68ZM506.85,1107h28c-.49-7.91-6.23-13.58-14-13.58S507.41,1099,506.85,1107Z"/><path class="cls-4" d="M566.42,1090.29v3.43c-.28,0-.56-.07-.84-.07-8.12,0-13,5.39-13,14.42v19h-3.5v-36.54h3.36v8C554.73,1093.23,559.56,1090.29,566.42,1090.29Z"/><path class="cls-4" d="M575,1078.88a2.88,2.88,0,0,1,2.87-2.88,2.84,2.84,0,1,1-2.87,2.88Zm1.12,11.69h3.5v36.54h-3.5Z"/><path class="cls-5" d="M835.92,859.66c-1.09,1.13-16.76-5.1-16.76-16.76s15.67-17.89,16.76-16.76c.91,1-8.38,7.08-8.38,16.76S836.83,858.71,835.92,859.66Z"/></g></svg>
                <div class="bg"></div>
                <div class="info-holder"></div>
            </div>
            <div  class="form-holder">
                <div class="form-content" >
                    <div class="form-items" style="margin-top: 6rem;">
                        <?php if ($this->session->flashdata('errors')): ?>
                            <div class="alert alert-danger"><?= $this->session->flashdata('errors')?></div>
                        <?php endif ?>
                        <?php if ($this->session->flashdata('success')): ?>
                            <div class="alert alert-primary"><?= $this->session->flashdata('success')?></div>
                        <?php endif ?>

                        <div class="page-links">
                            <a href="<?= base_url()?>">Login</a>
                            <a href="<?= base_url()?>rooms" class="active">Create Room</a>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <span style="color:white;font-size: 13px;"><b>Select Timezone</b></span>
                                <select class="form-control mt-1" name="timezone" required>
                                    <?php
                                    $tzlist = DateTimeZone::listIdentifiers(DateTimeZone::ALL);
                                    foreach($tzlist as $value)
                                    {
                                        echo "<option value=". $value .">". $value ."</option>";
                                    }
                                    ?>
                                </select>
                                <span style="color:white;font-size: 13px;"><b>Start Date</b></span>
                                <input class="form-control" type="date" name="date" required>
                                <span style="color:white;font-size: 13px;"><b>Start Time</b></span>
                                <input class="form-control" type="time" name="time" placeholder="Start Time" required>
                                <span style="color: white;font-size: 13px;"><b>End Time</b></span>
                                <input class="form-control" type="time"  name="end" placeholder="End Time" required>
                                <span style="color: white;font-size: 13px;"><b>Host Email</b></span>
                                <input class="form-control" type="email"  name="email" placeholder="Email" required>
                            </div>
                            <div class="row" id="dynamic_field">
                                <div class="col-8 ml-1" id="dynamic_field">
                                    <span style="color: white;font-size: 13px;"><b>Participant Email</b></span>
                                    <input type="email" name="studentmail[]" placeholder="Participant Email" class="form-control" id="name_list" required>
                                </div>
                                <div class="col-2">
                                    <button type="button" name="add" class="btn btn-warning mt-4" id="add">Add</button>
                                </div>
                            </div>
                            <div class="col-sm-5 mt-0 pt-0">
                                <div class="form-button">
                                    <button  type="submit" class="btn m-0">Create Room</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>