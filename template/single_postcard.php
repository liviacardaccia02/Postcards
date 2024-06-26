<body class="d-flex flex-column bg-secondary">
    <input type="hidden" id="postcardId" name="postcardId" value="<?php echo $postcard["idPostCard"] ?>" />
    <div class="d-flex flex-row justify-content-start align-items-center border-bottom border-3 border-primary mx-3">
        <a href="profile.php?username=<?= $postcard["username"] ?>" class="link-primary me-3 py-3">
            <i class="fa-solid fa-arrow-left fs-1"></i>
        </a>
    </div>
    <div class="d-flex align-items-center justify-content-center h-100 mx-3">
        <div class="postcard bg-secondary">
            <div class="postcard-side front bg-white p-2">
                <img class="postcard-image w-100 h-100 align-self-center"
                    src="<?= str_replace("../", "", $postcard["image"]) ?>" alt="Postcard Front">
            </div>
            <div class="postcard-side back">
                <div class="postcard-background w-100 h-100 p-2">
                    <div class="postcard-back bg-white h-100 w-100 d-flex">

                        <div class="postcard-description">
                            <p class="description-text text-start text-break text-wrap w-100 h-100">
                                <?php echo htmlspecialchars($postcard["caption"]); ?>
                            </p>
                        </div>

                        <div class="postcard-info d-flex align-items-start">
                            <div class="d-flex flex-row">
                                <a href="profile.php?username=<?= $postcard["username"] ?>">
                                    <img src="<?= str_replace("../", "", $profile['profilePicture']); ?>"
                                        class="info-image  rounded-pill border border-3 border-primary ratio ratio-1x1 mb-3"
                                        alt="Profile picture"></a>
                                <?php if ($postcard["username"] == $_SESSION["username"]): ?>
                                    <a id="deleteButton" class="link-dark info-symbol justify-self-end">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                    <span id="errorText" class="text-danger fs-7" hidden></span>
                                <?php endif; ?>
                            </div>
                            <div class="d-flex flex-row justify-content-start mb-2 w-100 align-items-center">
                                <a class="info-symbol me-2 link-dark"
                                    href="profile.php?username=<?= $postcard["username"] ?>">
                                    <i class="fa-solid fa-user"></i>
                                </a>
                                <a class="info-text link-dark" href="profile.php?username=<?= $postcard["username"] ?>">
                                    <?php echo htmlspecialchars($postcard["username"]); ?>
                                </a>
                            </div>
                            <div class="d-flex flex-row justify-content-start align-items-center mb-2 w-100">
                                <div class="info-symbol me-2 link-dark">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <p class="info-text link-dark">
                                    <?php echo htmlspecialchars($postcard["location"]); ?>
                                </p>
                            </div>
                            <div class="d-flex flex-row justify-content-start align-items-center w-100">
                                <div class="info-symbol link-dark">
                                    <i class="fa-regular fa-calendar me-1"></i>
                                </div>
                                <p class="info-text">
                                    <?php echo htmlspecialchars(date('d/m/Y', strtotime($postcard["timeStamp"]))); ?>
                                </p>
                            </div>

                            <div class="h-100">

                            </div>

                            <div class="comment-button align-self-end">
                                <a href="comments.php?postcardId=<?= $postcard["idPostCard"] ?>"
                                    class="link-dark info-symbol">
                                    <i class="fa-solid fa-comment"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require ("footer.php") ?>
    <?php if ($postcard["username"] == $_SESSION["username"]): ?>
        <script src="/Postcards/js/single_postcard.js"></script>
    <?php endif; ?>
</body>