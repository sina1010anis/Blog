<template>
    <div class="header_style_1 w-100">
        <span class="set-font fl-left view-data color-b-700 f-13 view-header-style-1">زمان ورود : {{ data }}</span>
        <span class="set-font fl-right view-domain color-b-700 f-13 view-header-style-1">{{ names.domain }}</span>
    </div>
    <div class="slider-st-model">
        <img src="/img/1.jpg" alt="">
    </div>
    <div class="show-item-one-style-1">
        <h2 dir="rtl" align="right" class="set-font">Test</h2>
        <p dir="rtl" align="right" class="set-font f-12 color-b-700 m-p-0"> 1400-05-09/ نویسنده : sina 1010</p>
        <div class="line"></div>
        <p dir="rtl" align="right" class="set-font f-14 color-b-900">
            Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga iure
            libero numquam pariatur quaerat? Corporis earum eos impedit inventore laboriosam minus, natus nobis nostrum
            numquam officia quam quibusdam reprehenderit sequi. adipisicing elit. Ab animi architecto at consequuntur
            culpa dolores ducimus est eum exercitationem facilis fugiat harum illo, libero, nemo optio reiciendis
            sapiente voluptatem voluptatibus?
        </p>
    </div>
    <div class="show-item-one-style-1">
        <div class="comment-section">
            <h1 align="right" class="comment-reply-title set-font color-b-700">کامت جدید</h1>
            <form id="commentform" class="comment-form">
                <div class="comment-form-name">
                    <input id="name" placeholder="Name *" name="name" type="text" value="" pattern="^[^0-9]+$" size="30"
                           maxlength="245" required>
                    <label for="name" data-help="¿Are you 11 from Stranger Things?">Name</label>
                </div>
                <div class="comment-form-surname">
                    <input id="surname" placeholder="Surname *" name="surname" type="text" value="" size="30"
                           maxlength="245" required>
                    <label for="surname" data-help="A girl has no name- Arya Stark">Surname</label>
                </div>
                <div class="comment-form-email">
                    <input id="email" placeholder="Email *" name="email" type="email" value="" size="30" maxlength="100"
                           aria-describedby="email-notes" required>
                    <label for="email" data-help="Format email@email.com">Email</label>
                </div>
                <div class="comment-form-url">
                    <input id="url" placeholder="Website" name="url" type="url" value="" size="30" maxlength="200">
                    <label for="url" data-help="Should start with http:// o https://">Website</label>
                </div>
                <div class="comment-form-comment">
                    <textarea textarea="" placeholder="Comment *" id="comment" name="comment" cols="45" rows="8"
                              maxlength="65525" required></textarea>
                    <label for="comment" data-help="Escribe algo! Lo primero que se te ocurra">Comment</label>
                </div>
                <div class="form-submit">
                    <input name="submit" type="submit" id="submit" class="submit set-font" value="ثبت">
                </div>
            </form>
        </div>
    </div>
    <div class="show-item-one-style-1">
        <div class="container">
            <div class="response-group">
                <div class="header-dropdown">
                    <div class="panel">
                        <ul>
                            <li>
                                <h2>
                                    Activity Title
                                </h2>
                                <span>2/4</span>
                                <div class="progress">
                                    <div class="progress__complete"></div>
                                </div>
                            </li>
                            <li>
                                <h2>
                                    Activity Title
                                </h2>
                                <span>2/4</span>
                                <div class="progress">
                                    <div class="progress__complete"></div>
                                </div>
                            </li>
                            <li>
                                <h2>
                                    Activity Title
                                </h2>
                                <span>2/4</span>
                                <div class="progress">
                                    <div class="progress__complete"></div>
                                </div>
                            </li>
                            <li>
                                <h2>
                                    Activity Title
                                </h2>
                                <span>2/4</span>
                                <div class="progress">
                                    <div class="progress__complete"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="response">
                    <div class="post-group">
                        <div class="post">
                            <div class="post__avatar"></div>
                            <h3 class="post__author">
                                Lester McTester
                            </h3>
                            <h4 class="post__timestamp">
                                Oct 13 at 8:51pm
                            </h4>
                            <p class="post__body">
                                Hamilton county river front museum center washington park breweries walnut hills findlay
                                market christian moerlein flying pig ohio valley jazz festival union terminal fifty west
                                coffee emporium chili.
                            </p>
                            <div class="post__actions">
                                <div class="button button--approve">
                                    <i class="fa fa-thumbs-o-up"></i><i class="fa fa-thumbs-up solid"></i>
                                </div>
                                <div class="button button--deny">
                                    <i class="fa fa-thumbs-o-down"></i><i class="fa fa-thumbs-down solid"></i>
                                </div>
                                <div class="button button--fill comment-trigger">
                                    <span>Comment...</span>
                                </div>
                                <div class="button button--flag">
                                    <i class="fa fa-comment-o"></i><i class="fa fa-comment solid"></i>2
                                </div>
                                <div class="post__comments">
                                    <div class="comment-group">
                                        <div class="post">
                                            <div class="post__avatar comment__avatar"></div>
                                            <h3 class="post__author">
                                                Lester McTester
                                            </h3>
                                            <h4 class="post__timestamp">
                                                Oct 13 at 8:51pm
                                            </h4>
                                            <p class="post__body">
                                                Hamilton county river front museum center washington park breweries
                                                walnut hills findlay market christian moerlein flying pig ohio valley
                                                jazz festival union terminal fifty west coffee emporium chili.
                                            </p>
                                        </div>
                                        <div class="post">
                                            <div class="post__avatar comment__avatar"></div>
                                            <h3 class="post__author">
                                                Lester McTester
                                            </h3>
                                            <h4 class="post__timestamp">
                                                Oct 13 at 8:51pm
                                            </h4>
                                            <p class="post__body">
                                                Hamilton county river front museum center washington park breweries
                                                walnut hills findlay market christian moerlein flying pig ohio valley
                                                jazz festival union terminal fifty west coffee emporium chili.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="comment-form">
                                        <div class="comment-form__avatar"></div>
                                        <textarea></textarea>
                                        <div class="comment-form__actions">
                                            <div class="button button--light cancel">
                                                Cancel
                                            </div>
                                            <div class="button button--confirm">
                                                Comment
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "show_style_1",
    props: [
        'names',
        'data',
    ]
}
</script>

