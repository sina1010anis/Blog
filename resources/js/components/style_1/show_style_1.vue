<template>
    <div class="slider-st-model">
        <img src="/img/1.jpg" alt="">
    </div>
    <div class="show-item-one-style-1">
        <h2 dir="rtl" align="right" class="set-font">{{data.title}}</h2>
        <p dir="rtl" align="right" class="set-font f-12 color-b-700 m-p-0">{{data.created_at}}</p>
        <div class="line"></div>
        <p dir="rtl" align="right" class="set-font f-14 color-b-900">
            {{data.body}}
        </p>
        <div class="line"></div>
        <div class="group-key-words" style="overflow: auto">
            <span class="fl-right set-font f-11">{{data.key_word}}</span>
        </div>
    </div>
    <div class="show-item-one-style-1">
        <div class="comment-section">
            <h1 align="right" class="comment-reply-title set-font color-b-700">کامت جدید</h1>
            <slot name="form_new_comment"/>
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
        'data'
    ]
}
</script>

