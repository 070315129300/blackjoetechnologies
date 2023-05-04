<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <meta
        name="robots"
        content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1"
    />
    <link
        rel="alternate"
        hreflang="en"
        href="https://thecapvestgroup.com"
    />
    <link
        rel="alternate"
        hreflang="fr"
        href="https://thecapvestgroup.com/fr/"
    />
    <link
        rel="alternate"
        hreflang="x-default"
        href="https://thecapvestgroup.com"
    />
    <style media="all">@charset "UTF-8";

        .wp-block-archives-dropdown label {
            display: block
        }

        .wp-block-avatar {
            box-sizing: border-box
        }

        .wp-block-avatar.aligncenter {
            text-align: center
        }

        .wp-block-audio {
            box-sizing: border-box
        }

        .wp-block-audio figcaption {
            margin-top: .5em;
            margin-bottom: 1em
        }

        .wp-block-audio audio {
            width: 100%;
            min-width: 300px
        }

        .wp-block-button__link {
            cursor: pointer;
            display: inline-block;
            text-align: center;
            word-break: break-word;
            box-sizing: border-box
        }

        .wp-block-button__link.aligncenter {
            text-align: center
        }

        .wp-block-button__link.alignright {
            text-align: right
        }

        :where(.wp-block-button__link) {
            box-shadow: none;
            text-decoration: none;
            border-radius: 9999px;
            padding: calc(.667em + 2px) calc(1.333em + 2px)
        }

        .wp-block-button[style*=text-decoration] .wp-block-button__link {
            text-decoration: inherit
        }

        .wp-block-buttons>.wp-block-button.has-custom-width {
            max-width: none
        }

        .wp-block-buttons>.wp-block-button.has-custom-width .wp-block-button__link {
            width: 100%
        }

        .wp-block-buttons>.wp-block-button.has-custom-font-size .wp-block-button__link {
            font-size: inherit
        }

        .wp-block-buttons>.wp-block-button.wp-block-button__width-25 {
            width: calc(25% - var(--wp--style--block-gap, .5em)*0.75)
        }

        .wp-block-buttons>.wp-block-button.wp-block-button__width-50 {
            width: calc(50% - var(--wp--style--block-gap, .5em)*0.5)
        }

        .wp-block-buttons>.wp-block-button.wp-block-button__width-75 {
            width: calc(75% - var(--wp--style--block-gap, .5em)*0.25)
        }

        .wp-block-buttons>.wp-block-button.wp-block-button__width-100 {
            width: 100%;
            flex-basis: 100%
        }

        .wp-block-buttons.is-vertical>.wp-block-button.wp-block-button__width-25 {
            width: 25%
        }

        .wp-block-buttons.is-vertical>.wp-block-button.wp-block-button__width-50 {
            width: 50%
        }

        .wp-block-buttons.is-vertical>.wp-block-button.wp-block-button__width-75 {
            width: 75%
        }

        .wp-block-button.is-style-squared,
        .wp-block-button__link.wp-block-button.is-style-squared {
            border-radius: 0
        }

        .wp-block-button.no-border-radius,
        .wp-block-button__link.no-border-radius {
            border-radius: 0 !important
        }

        .wp-block-button.is-style-outline>.wp-block-button__link,
        .wp-block-button .wp-block-button__link.is-style-outline {
            border: 2px solid;
            padding: .667em 1.333em
        }

        .wp-block-button.is-style-outline>.wp-block-button__link:not(.has-text-color),
        .wp-block-button .wp-block-button__link.is-style-outline:not(.has-text-color) {
            color: currentColor
        }

        .wp-block-button.is-style-outline>.wp-block-button__link:not(.has-background),
        .wp-block-button .wp-block-button__link.is-style-outline:not(.has-background) {
            background-color: transparent;
            background-image: none
        }

        .wp-block-buttons.is-vertical {
            flex-direction: column
        }

        .wp-block-buttons.is-vertical>.wp-block-button:last-child {
            margin-bottom: 0
        }

        .wp-block-buttons>.wp-block-button {
            display: inline-block;
            margin: 0
        }

        .wp-block-buttons.is-content-justification-left {
            justify-content: flex-start
        }

        .wp-block-buttons.is-content-justification-left.is-vertical {
            align-items: flex-start
        }

        .wp-block-buttons.is-content-justification-center {
            justify-content: center
        }

        .wp-block-buttons.is-content-justification-center.is-vertical {
            align-items: center
        }

        .wp-block-buttons.is-content-justification-right {
            justify-content: flex-end
        }

        .wp-block-buttons.is-content-justification-right.is-vertical {
            align-items: flex-end
        }

        .wp-block-buttons.is-content-justification-space-between {
            justify-content: space-between
        }

        .wp-block-buttons.aligncenter {
            text-align: center
        }

        .wp-block-buttons:not(.is-content-justification-space-between, .is-content-justification-right, .is-content-justification-left, .is-content-justification-center) .wp-block-button.aligncenter {
            margin-left: auto;
            margin-right: auto;
            width: 100%
        }

        .wp-block-buttons[style*=text-decoration] .wp-block-button,
        .wp-block-buttons[style*=text-decoration] .wp-block-button__link {
            text-decoration: inherit
        }

        .wp-block-buttons.has-custom-font-size .wp-block-button__link {
            font-size: inherit
        }

        .wp-block-button.aligncenter,
        .wp-block-calendar {
            text-align: center
        }

        .wp-block-calendar tbody td,
        .wp-block-calendar th {
            padding: .25em;
            border: 1px solid #ddd
        }

        .wp-block-calendar tfoot td {
            border: none
        }

        .wp-block-calendar table {
            width: 100%;
            border-collapse: collapse
        }

        .wp-block-calendar table th {
            font-weight: 400;
            background: #ddd
        }

        .wp-block-calendar a {
            text-decoration: underline
        }

        .wp-block-calendar table caption,
        .wp-block-calendar table tbody {
            color: #40464d
        }

        .wp-block-categories {
            box-sizing: border-box
        }

        .wp-block-categories.alignleft {
            margin-right: 2em
        }

        .wp-block-categories.alignright {
            margin-left: 2em
        }

        .wp-block-code {
            box-sizing: border-box
        }

        .wp-block-code code {
            display: block;
            font-family: inherit;
            overflow-wrap: break-word;
            white-space: pre-wrap
        }

        .wp-block-columns {
            display: flex;
            margin-bottom: 1.75em;
            box-sizing: border-box;
            flex-wrap: wrap !important;
            align-items: normal !important
        }

        @media (min-width:782px) {
            .wp-block-columns {
                flex-wrap: nowrap !important
            }
        }

        .wp-block-columns.are-vertically-aligned-top {
            align-items: flex-start
        }

        .wp-block-columns.are-vertically-aligned-center {
            align-items: center
        }

        .wp-block-columns.are-vertically-aligned-bottom {
            align-items: flex-end
        }

        @media (max-width:781px) {
            .wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column {
                flex-basis: 100% !important
            }
        }

        @media (min-width:782px) {
            .wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column {
                flex-basis: 0;
                flex-grow: 1
            }

            .wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column[style*=flex-basis] {
                flex-grow: 0
            }
        }

        .wp-block-columns.is-not-stacked-on-mobile {
            flex-wrap: nowrap !important
        }

        .wp-block-columns.is-not-stacked-on-mobile>.wp-block-column {
            flex-basis: 0;
            flex-grow: 1
        }

        .wp-block-columns.is-not-stacked-on-mobile>.wp-block-column[style*=flex-basis] {
            flex-grow: 0
        }

        :where(.wp-block-columns.has-background) {
            padding: 1.25em 2.375em
        }

        .wp-block-column {
            flex-grow: 1;
            min-width: 0;
            word-break: break-word;
            overflow-wrap: break-word
        }

        .wp-block-column.is-vertically-aligned-top {
            align-self: flex-start
        }

        .wp-block-column.is-vertically-aligned-center {
            align-self: center
        }

        .wp-block-column.is-vertically-aligned-bottom {
            align-self: flex-end
        }

        .wp-block-column.is-vertically-aligned-bottom,
        .wp-block-column.is-vertically-aligned-center,
        .wp-block-column.is-vertically-aligned-top {
            width: 100%
        }

        .wp-block-post-comments .alignleft {
            float: left
        }

        .wp-block-post-comments .alignright {
            float: right
        }

        .wp-block-post-comments .navigation:after {
            content: "";
            display: table;
            clear: both
        }

        .wp-block-post-comments .commentlist {
            clear: both;
            list-style: none;
            margin: 0;
            padding: 0
        }

        .wp-block-post-comments .commentlist .comment {
            min-height: 2.25em;
            padding-left: 3.25em
        }

        .wp-block-post-comments .commentlist .comment p {
            font-size: 1em;
            line-height: 1.8;
            margin: 1em 0
        }

        .wp-block-post-comments .commentlist .children {
            list-style: none;
            margin: 0;
            padding: 0
        }

        .wp-block-post-comments .comment-author {
            line-height: 1.5
        }

        .wp-block-post-comments .comment-author .avatar {
            border-radius: 1.5em;
            display: block;
            float: left;
            height: 2.5em;
            margin-top: .5em;
            margin-right: .75em;
            width: 2.5em
        }

        .wp-block-post-comments .comment-author cite {
            font-style: normal
        }

        .wp-block-post-comments .comment-meta {
            font-size: .875em;
            line-height: 1.5
        }

        .wp-block-post-comments .comment-meta b {
            font-weight: 400
        }

        .wp-block-post-comments .comment-meta .comment-awaiting-moderation {
            margin-top: 1em;
            margin-bottom: 1em;
            display: block
        }

        .wp-block-post-comments .comment-body .commentmetadata {
            font-size: .875em
        }

        .wp-block-post-comments .comment-form-author label,
        .wp-block-post-comments .comment-form-comment label,
        .wp-block-post-comments .comment-form-email label,
        .wp-block-post-comments .comment-form-url label {
            display: block;
            margin-bottom: .25em
        }

        .wp-block-post-comments .comment-form input:not([type=submit]):not([type=checkbox]),
        .wp-block-post-comments .comment-form textarea {
            display: block;
            box-sizing: border-box;
            width: 100%
        }

        .wp-block-post-comments .comment-form-cookies-consent {
            display: flex;
            gap: .25em
        }

        .wp-block-post-comments .comment-form-cookies-consent #wp-comment-cookies-consent {
            margin-top: .35em
        }

        .wp-block-post-comments .comment-reply-title {
            margin-bottom: 0
        }

        .wp-block-post-comments .comment-reply-title :where(small) {
            font-size: var(--wp--preset--font-size--medium, smaller);
            margin-left: .5em
        }

        .wp-block-post-comments .reply {
            font-size: .875em;
            margin-bottom: 1.4em
        }

        .wp-block-post-comments input:not([type=submit]),
        .wp-block-post-comments textarea {
            border: 1px solid #949494;
            font-size: 1em;
            font-family: inherit
        }

        .wp-block-post-comments input:not([type=submit]):not([type=checkbox]),
        .wp-block-post-comments textarea {
            padding: calc(.667em + 2px)
        }

        :where(.wp-block-post-comments input[type=submit]) {
            border: none
        }

        .wp-block-comments-pagination>.wp-block-comments-pagination-next,
        .wp-block-comments-pagination>.wp-block-comments-pagination-numbers,
        .wp-block-comments-pagination>.wp-block-comments-pagination-previous {
            margin-right: .5em;
            margin-bottom: .5em
        }

        .wp-block-comments-pagination>.wp-block-comments-pagination-next:last-child,
        .wp-block-comments-pagination>.wp-block-comments-pagination-numbers:last-child,
        .wp-block-comments-pagination>.wp-block-comments-pagination-previous:last-child {
            margin-right: 0
        }

        .wp-block-comments-pagination .wp-block-comments-pagination-previous-arrow {
            margin-right: 1ch;
            display: inline-block
        }

        .wp-block-comments-pagination .wp-block-comments-pagination-previous-arrow:not(.is-arrow-chevron) {
            transform: scaleX(1)
        }

        .wp-block-comments-pagination .wp-block-comments-pagination-next-arrow {
            margin-left: 1ch;
            display: inline-block
        }

        .wp-block-comments-pagination .wp-block-comments-pagination-next-arrow:not(.is-arrow-chevron) {
            transform: scaleX(1)
        }

        .wp-block-comments-pagination.aligncenter {
            justify-content: center
        }

        .wp-block-comment-template {
            margin-bottom: 0;
            max-width: 100%;
            list-style: none;
            padding: 0
        }

        .wp-block-comment-template li {
            clear: both
        }

        .wp-block-comment-template ol {
            margin-bottom: 0;
            max-width: 100%;
            list-style: none;
            padding-left: 2rem
        }

        .wp-block-comment-template.alignleft {
            float: left
        }

        .wp-block-comment-template.aligncenter {
            margin-left: auto;
            margin-right: auto;
            width: -moz-fit-content;
            width: fit-content
        }

        .wp-block-comment-template.alignright {
            float: right
        }

        .wp-block-cover,
        .wp-block-cover-image {
            position: relative;
            background-position: 50%;
            min-height: 430px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1em;
            box-sizing: border-box
        }

        .wp-block-cover-image.has-background-dim:not([class*=-background-color]),
        .wp-block-cover-image .has-background-dim:not([class*=-background-color]),
        .wp-block-cover.has-background-dim:not([class*=-background-color]),
        .wp-block-cover .has-background-dim:not([class*=-background-color]) {
            background-color: #000
        }

        .wp-block-cover-image .has-background-dim.has-background-gradient,
        .wp-block-cover .has-background-dim.has-background-gradient {
            background-color: transparent
        }

        .wp-block-cover-image.has-background-dim:before,
        .wp-block-cover.has-background-dim:before {
            content: "";
            background-color: inherit
        }

        .wp-block-cover-image.has-background-dim:not(.has-background-gradient):before,
        .wp-block-cover-image .wp-block-cover__background,
        .wp-block-cover-image .wp-block-cover__gradient-background,
        .wp-block-cover.has-background-dim:not(.has-background-gradient):before,
        .wp-block-cover .wp-block-cover__background,
        .wp-block-cover .wp-block-cover__gradient-background {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: 1;
            opacity: .5
        }

        .wp-block-cover-image.has-background-dim.has-background-dim-10 .wp-block-cover__background,
        .wp-block-cover-image.has-background-dim.has-background-dim-10 .wp-block-cover__gradient-background,
        .wp-block-cover-image.has-background-dim.has-background-dim-10:not(.has-background-gradient):before,
        .wp-block-cover.has-background-dim.has-background-dim-10 .wp-block-cover__background,
        .wp-block-cover.has-background-dim.has-background-dim-10 .wp-block-cover__gradient-background,
        .wp-block-cover.has-background-dim.has-background-dim-10:not(.has-background-gradient):before {
            opacity: .1
        }

        .wp-block-cover-image.has-background-dim.has-background-dim-20 .wp-block-cover__background,
        .wp-block-cover-image.has-background-dim.has-background-dim-20 .wp-block-cover__gradient-background,
        .wp-block-cover-image.has-background-dim.has-background-dim-20:not(.has-background-gradient):before,
        .wp-block-cover.has-background-dim.has-background-dim-20 .wp-block-cover__background,
        .wp-block-cover.has-background-dim.has-background-dim-20 .wp-block-cover__gradient-background,
        .wp-block-cover.has-background-dim.has-background-dim-20:not(.has-background-gradient):before {
            opacity: .2
        }

        .wp-block-cover-image.has-background-dim.has-background-dim-30 .wp-block-cover__background,
        .wp-block-cover-image.has-background-dim.has-background-dim-30 .wp-block-cover__gradient-background,
        .wp-block-cover-image.has-background-dim.has-background-dim-30:not(.has-background-gradient):before,
        .wp-block-cover.has-background-dim.has-background-dim-30 .wp-block-cover__background,
        .wp-block-cover.has-background-dim.has-background-dim-30 .wp-block-cover__gradient-background,
        .wp-block-cover.has-background-dim.has-background-dim-30:not(.has-background-gradient):before {
            opacity: .3
        }

        .wp-block-cover-image.has-background-dim.has-background-dim-40 .wp-block-cover__background,
        .wp-block-cover-image.has-background-dim.has-background-dim-40 .wp-block-cover__gradient-background,
        .wp-block-cover-image.has-background-dim.has-background-dim-40:not(.has-background-gradient):before,
        .wp-block-cover.has-background-dim.has-background-dim-40 .wp-block-cover__background,
        .wp-block-cover.has-background-dim.has-background-dim-40 .wp-block-cover__gradient-background,
        .wp-block-cover.has-background-dim.has-background-dim-40:not(.has-background-gradient):before {
            opacity: .4
        }

        .wp-block-cover-image.has-background-dim.has-background-dim-50 .wp-block-cover__background,
        .wp-block-cover-image.has-background-dim.has-background-dim-50 .wp-block-cover__gradient-background,
        .wp-block-cover-image.has-background-dim.has-background-dim-50:not(.has-background-gradient):before,
        .wp-block-cover.has-background-dim.has-background-dim-50 .wp-block-cover__background,
        .wp-block-cover.has-background-dim.has-background-dim-50 .wp-block-cover__gradient-background,
        .wp-block-cover.has-background-dim.has-background-dim-50:not(.has-background-gradient):before {
            opacity: .5
        }

        .wp-block-cover-image.has-background-dim.has-background-dim-60 .wp-block-cover__background,
        .wp-block-cover-image.has-background-dim.has-background-dim-60 .wp-block-cover__gradient-background,
        .wp-block-cover-image.has-background-dim.has-background-dim-60:not(.has-background-gradient):before,
        .wp-block-cover.has-background-dim.has-background-dim-60 .wp-block-cover__background,
        .wp-block-cover.has-background-dim.has-background-dim-60 .wp-block-cover__gradient-background,
        .wp-block-cover.has-background-dim.has-background-dim-60:not(.has-background-gradient):before {
            opacity: .6
        }

        .wp-block-cover-image.has-background-dim.has-background-dim-70 .wp-block-cover__background,
        .wp-block-cover-image.has-background-dim.has-background-dim-70 .wp-block-cover__gradient-background,
        .wp-block-cover-image.has-background-dim.has-background-dim-70:not(.has-background-gradient):before,
        .wp-block-cover.has-background-dim.has-background-dim-70 .wp-block-cover__background,
        .wp-block-cover.has-background-dim.has-background-dim-70 .wp-block-cover__gradient-background,
        .wp-block-cover.has-background-dim.has-background-dim-70:not(.has-background-gradient):before {
            opacity: .7
        }

        .wp-block-cover-image.has-background-dim.has-background-dim-80 .wp-block-cover__background,
        .wp-block-cover-image.has-background-dim.has-background-dim-80 .wp-block-cover__gradient-background,
        .wp-block-cover-image.has-background-dim.has-background-dim-80:not(.has-background-gradient):before,
        .wp-block-cover.has-background-dim.has-background-dim-80 .wp-block-cover__background,
        .wp-block-cover.has-background-dim.has-background-dim-80 .wp-block-cover__gradient-background,
        .wp-block-cover.has-background-dim.has-background-dim-80:not(.has-background-gradient):before {
            opacity: .8
        }

        .wp-block-cover-image.has-background-dim.has-background-dim-90 .wp-block-cover__background,
        .wp-block-cover-image.has-background-dim.has-background-dim-90 .wp-block-cover__gradient-background,
        .wp-block-cover-image.has-background-dim.has-background-dim-90:not(.has-background-gradient):before,
        .wp-block-cover.has-background-dim.has-background-dim-90 .wp-block-cover__background,
        .wp-block-cover.has-background-dim.has-background-dim-90 .wp-block-cover__gradient-background,
        .wp-block-cover.has-background-dim.has-background-dim-90:not(.has-background-gradient):before {
            opacity: .9
        }

        .wp-block-cover-image.has-background-dim.has-background-dim-100 .wp-block-cover__background,
        .wp-block-cover-image.has-background-dim.has-background-dim-100 .wp-block-cover__gradient-background,
        .wp-block-cover-image.has-background-dim.has-background-dim-100:not(.has-background-gradient):before,
        .wp-block-cover.has-background-dim.has-background-dim-100 .wp-block-cover__background,
        .wp-block-cover.has-background-dim.has-background-dim-100 .wp-block-cover__gradient-background,
        .wp-block-cover.has-background-dim.has-background-dim-100:not(.has-background-gradient):before {
            opacity: 1
        }

        .wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-0,
        .wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-0,
        .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-0,
        .wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-0 {
            opacity: 0
        }

        .wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-10,
        .wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-10,
        .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-10,
        .wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-10 {
            opacity: .1
        }

        .wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-20,
        .wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-20,
        .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-20,
        .wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-20 {
            opacity: .2
        }

        .wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-30,
        .wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-30,
        .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-30,
        .wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-30 {
            opacity: .3
        }

        .wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-40,
        .wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-40,
        .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-40,
        .wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-40 {
            opacity: .4
        }

        .wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-50,
        .wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-50,
        .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-50,
        .wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-50 {
            opacity: .5
        }

        .wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-60,
        .wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-60,
        .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-60,
        .wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-60 {
            opacity: .6
        }

        .wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-70,
        .wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-70,
        .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-70,
        .wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-70 {
            opacity: .7
        }

        .wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-80,
        .wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-80,
        .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-80,
        .wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-80 {
            opacity: .8
        }

        .wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-90,
        .wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-90,
        .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-90,
        .wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-90 {
            opacity: .9
        }

        .wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-100,
        .wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-100,
        .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-100,
        .wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-100 {
            opacity: 1
        }

        .wp-block-cover-image.alignleft,
        .wp-block-cover-image.alignright,
        .wp-block-cover.alignleft,
        .wp-block-cover.alignright {
            max-width: 420px;
            width: 100%
        }

        .wp-block-cover-image:after,
        .wp-block-cover:after {
            display: block;
            content: "";
            font-size: 0;
            min-height: inherit
        }

        @supports (position:sticky) {

            .wp-block-cover-image:after,
            .wp-block-cover:after {
                content: none
            }
        }

        .wp-block-cover-image.aligncenter,
        .wp-block-cover-image.alignleft,
        .wp-block-cover-image.alignright,
        .wp-block-cover.aligncenter,
        .wp-block-cover.alignleft,
        .wp-block-cover.alignright {
            display: flex
        }

        .wp-block-cover-image .wp-block-cover__inner-container,
        .wp-block-cover .wp-block-cover__inner-container {
            width: 100%;
            z-index: 1;
            color: #fff
        }

        .wp-block-cover-image.is-light .wp-block-cover__inner-container,
        .wp-block-cover.is-light .wp-block-cover__inner-container {
            color: #000
        }

        .wp-block-cover-image h1:not(.has-text-color),
        .wp-block-cover-image h2:not(.has-text-color),
        .wp-block-cover-image h3:not(.has-text-color),
        .wp-block-cover-image h4:not(.has-text-color),
        .wp-block-cover-image h5:not(.has-text-color),
        .wp-block-cover-image h6:not(.has-text-color),
        .wp-block-cover-image p:not(.has-text-color),
        .wp-block-cover h1:not(.has-text-color),
        .wp-block-cover h2:not(.has-text-color),
        .wp-block-cover h3:not(.has-text-color),
        .wp-block-cover h4:not(.has-text-color),
        .wp-block-cover h5:not(.has-text-color),
        .wp-block-cover h6:not(.has-text-color),
        .wp-block-cover p:not(.has-text-color) {
            color: inherit
        }

        .wp-block-cover-image.is-position-top-left,
        .wp-block-cover.is-position-top-left {
            align-items: flex-start;
            justify-content: flex-start
        }

        .wp-block-cover-image.is-position-top-center,
        .wp-block-cover.is-position-top-center {
            align-items: flex-start;
            justify-content: center
        }

        .wp-block-cover-image.is-position-top-right,
        .wp-block-cover.is-position-top-right {
            align-items: flex-start;
            justify-content: flex-end
        }

        .wp-block-cover-image.is-position-center-left,
        .wp-block-cover.is-position-center-left {
            align-items: center;
            justify-content: flex-start
        }

        .wp-block-cover-image.is-position-center-center,
        .wp-block-cover.is-position-center-center {
            align-items: center;
            justify-content: center
        }

        .wp-block-cover-image.is-position-center-right,
        .wp-block-cover.is-position-center-right {
            align-items: center;
            justify-content: flex-end
        }

        .wp-block-cover-image.is-position-bottom-left,
        .wp-block-cover.is-position-bottom-left {
            align-items: flex-end;
            justify-content: flex-start
        }

        .wp-block-cover-image.is-position-bottom-center,
        .wp-block-cover.is-position-bottom-center {
            align-items: flex-end;
            justify-content: center
        }

        .wp-block-cover-image.is-position-bottom-right,
        .wp-block-cover.is-position-bottom-right {
            align-items: flex-end;
            justify-content: flex-end
        }

        .wp-block-cover-image.has-custom-content-position.has-custom-content-position .wp-block-cover__inner-container,
        .wp-block-cover.has-custom-content-position.has-custom-content-position .wp-block-cover__inner-container {
            margin: 0;
            width: auto
        }

        .wp-block-cover-image .wp-block-cover__image-background,
        .wp-block-cover-image video.wp-block-cover__video-background,
        .wp-block-cover .wp-block-cover__image-background,
        .wp-block-cover video.wp-block-cover__video-background {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            max-width: none;
            max-height: none;
            object-fit: cover;
            outline: none;
            border: none;
            box-shadow: none
        }

        .wp-block-cover-image.has-parallax,
        .wp-block-cover.has-parallax,
        .wp-block-cover__image-background.has-parallax,
        video.wp-block-cover__video-background.has-parallax {
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat
        }

        @supports (-webkit-overflow-scrolling:touch) {

            .wp-block-cover-image.has-parallax,
            .wp-block-cover.has-parallax,
            .wp-block-cover__image-background.has-parallax,
            video.wp-block-cover__video-background.has-parallax {
                background-attachment: scroll
            }
        }

        @media (prefers-reduced-motion:reduce) {

            .wp-block-cover-image.has-parallax,
            .wp-block-cover.has-parallax,
            .wp-block-cover__image-background.has-parallax,
            video.wp-block-cover__video-background.has-parallax {
                background-attachment: scroll
            }
        }

        .wp-block-cover-image.is-repeated,
        .wp-block-cover.is-repeated,
        .wp-block-cover__image-background.is-repeated,
        video.wp-block-cover__video-background.is-repeated {
            background-repeat: repeat;
            background-size: auto
        }

        .wp-block-cover__image-background,
        .wp-block-cover__video-background {
            z-index: 0
        }

        .wp-block-cover-image-text,
        .wp-block-cover-image-text a,
        .wp-block-cover-image-text a:active,
        .wp-block-cover-image-text a:focus,
        .wp-block-cover-image-text a:hover,
        .wp-block-cover-text,
        .wp-block-cover-text a,
        .wp-block-cover-text a:active,
        .wp-block-cover-text a:focus,
        .wp-block-cover-text a:hover,
        section.wp-block-cover-image h2,
        section.wp-block-cover-image h2 a,
        section.wp-block-cover-image h2 a:active,
        section.wp-block-cover-image h2 a:focus,
        section.wp-block-cover-image h2 a:hover {
            color: #fff
        }

        .wp-block-cover-image .wp-block-cover.has-left-content {
            justify-content: flex-start
        }

        .wp-block-cover-image .wp-block-cover.has-right-content {
            justify-content: flex-end
        }

        .wp-block-cover-image.has-left-content .wp-block-cover-image-text,
        .wp-block-cover.has-left-content .wp-block-cover-text,
        section.wp-block-cover-image.has-left-content>h2 {
            margin-left: 0;
            text-align: left
        }

        .wp-block-cover-image.has-right-content .wp-block-cover-image-text,
        .wp-block-cover.has-right-content .wp-block-cover-text,
        section.wp-block-cover-image.has-right-content>h2 {
            margin-right: 0;
            text-align: right
        }

        .wp-block-cover-image .wp-block-cover-image-text,
        .wp-block-cover .wp-block-cover-text,
        section.wp-block-cover-image>h2 {
            font-size: 2em;
            line-height: 1.25;
            z-index: 1;
            margin-bottom: 0;
            max-width: 840px;
            padding: .44em;
            text-align: center
        }

        .wp-block-embed.alignleft,
        .wp-block-embed.alignright,
        .wp-block[data-align=left]>[data-type="core/embed"],
        .wp-block[data-align=right]>[data-type="core/embed"] {
            max-width: 360px;
            width: 100%
        }

        .wp-block-embed.alignleft .wp-block-embed__wrapper,
        .wp-block-embed.alignright .wp-block-embed__wrapper,
        .wp-block[data-align=left]>[data-type="core/embed"] .wp-block-embed__wrapper,
        .wp-block[data-align=right]>[data-type="core/embed"] .wp-block-embed__wrapper {
            min-width: 280px
        }

        .wp-block-cover .wp-block-embed {
            min-width: 320px;
            min-height: 240px
        }

        .wp-block-embed {
            overflow-wrap: break-word
        }

        .wp-block-embed figcaption {
            margin-top: .5em;
            margin-bottom: 1em
        }

        .wp-block-embed iframe {
            max-width: 100%
        }

        .wp-block-embed__wrapper {
            position: relative
        }

        .wp-embed-responsive .wp-has-aspect-ratio .wp-block-embed__wrapper:before {
            content: "";
            display: block;
            padding-top: 50%
        }

        .wp-embed-responsive .wp-has-aspect-ratio iframe {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            height: 100%;
            width: 100%
        }

        .wp-embed-responsive .wp-embed-aspect-21-9 .wp-block-embed__wrapper:before {
            padding-top: 42.85%
        }

        .wp-embed-responsive .wp-embed-aspect-18-9 .wp-block-embed__wrapper:before {
            padding-top: 50%
        }

        .wp-embed-responsive .wp-embed-aspect-16-9 .wp-block-embed__wrapper:before {
            padding-top: 56.25%
        }

        .wp-embed-responsive .wp-embed-aspect-4-3 .wp-block-embed__wrapper:before {
            padding-top: 75%
        }

        .wp-embed-responsive .wp-embed-aspect-1-1 .wp-block-embed__wrapper:before {
            padding-top: 100%
        }

        .wp-embed-responsive .wp-embed-aspect-9-16 .wp-block-embed__wrapper:before {
            padding-top: 177.77%
        }

        .wp-embed-responsive .wp-embed-aspect-1-2 .wp-block-embed__wrapper:before {
            padding-top: 200%
        }

        .wp-block-file {
            margin-bottom: 1.5em
        }

        .wp-block-file:not(.wp-element-button) {
            font-size: .8em
        }

        .wp-block-file.aligncenter {
            text-align: center
        }

        .wp-block-file.alignright {
            text-align: right
        }

        .wp-block-file *+.wp-block-file__button {
            margin-left: .75em
        }

        .wp-block-file__embed {
            margin-bottom: 1em
        }

        :where(.wp-block-file__button) {
            border-radius: 2em;
            padding: .5em 1em
        }

        :where(.wp-block-file__button):is(a):active,
        :where(.wp-block-file__button):is(a):focus,
        :where(.wp-block-file__button):is(a):hover,
        :where(.wp-block-file__button):is(a):visited {
            box-shadow: none;
            color: #fff;
            opacity: .85;
            text-decoration: none
        }

        .blocks-gallery-grid:not(.has-nested-images),
        .wp-block-gallery:not(.has-nested-images) {
            display: flex;
            flex-wrap: wrap;
            list-style-type: none;
            padding: 0;
            margin: 0
        }

        .blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-image,
        .blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-item,
        .wp-block-gallery:not(.has-nested-images) .blocks-gallery-image,
        .wp-block-gallery:not(.has-nested-images) .blocks-gallery-item {
            margin: 0 1em 1em 0;
            display: flex;
            flex-grow: 1;
            flex-direction: column;
            justify-content: center;
            position: relative;
            width: calc(50% - 1em)
        }

        .blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-image:nth-of-type(2n),
        .blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-item:nth-of-type(2n),
        .wp-block-gallery:not(.has-nested-images) .blocks-gallery-image:nth-of-type(2n),
        .wp-block-gallery:not(.has-nested-images) .blocks-gallery-item:nth-of-type(2n) {
            margin-right: 0
        }

        .blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-image figure,
        .blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-item figure,
        .wp-block-gallery:not(.has-nested-images) .blocks-gallery-image figure,
        .wp-block-gallery:not(.has-nested-images) .blocks-gallery-item figure {
            margin: 0;
            height: 100%;
            display: flex;
            align-items: flex-end;
            justify-content: flex-start
        }

        .blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-image img,
        .blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-item img,
        .wp-block-gallery:not(.has-nested-images) .blocks-gallery-image img,
        .wp-block-gallery:not(.has-nested-images) .blocks-gallery-item img {
            display: block;
            max-width: 100%;
            height: auto;
            width: auto
        }

        .blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-image figcaption,
        .blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-item figcaption,
        .wp-block-gallery:not(.has-nested-images) .blocks-gallery-image figcaption,
        .wp-block-gallery:not(.has-nested-images) .blocks-gallery-item figcaption {
            position: absolute;
            bottom: 0;
            width: 100%;
            max-height: 100%;
            overflow: auto;
            padding: 3em .77em .7em;
            color: #fff;
            text-align: center;
            font-size: .8em;
            background: linear-gradient(0deg, rgba(0, 0, 0, .7), rgba(0, 0, 0, .3) 70%, transparent);
            box-sizing: border-box;
            margin: 0;
            z-index: 2
        }

        .blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-image figcaption img,
        .blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-item figcaption img,
        .wp-block-gallery:not(.has-nested-images) .blocks-gallery-image figcaption img,
        .wp-block-gallery:not(.has-nested-images) .blocks-gallery-item figcaption img {
            display: inline
        }

        .blocks-gallery-grid:not(.has-nested-images) figcaption,
        .wp-block-gallery:not(.has-nested-images) figcaption {
            flex-grow: 1
        }

        .blocks-gallery-grid:not(.has-nested-images).is-cropped .blocks-gallery-image a,
        .blocks-gallery-grid:not(.has-nested-images).is-cropped .blocks-gallery-image img,
        .blocks-gallery-grid:not(.has-nested-images).is-cropped .blocks-gallery-item a,
        .blocks-gallery-grid:not(.has-nested-images).is-cropped .blocks-gallery-item img,
        .wp-block-gallery:not(.has-nested-images).is-cropped .blocks-gallery-image a,
        .wp-block-gallery:not(.has-nested-images).is-cropped .blocks-gallery-image img,
        .wp-block-gallery:not(.has-nested-images).is-cropped .blocks-gallery-item a,
        .wp-block-gallery:not(.has-nested-images).is-cropped .blocks-gallery-item img {
            width: 100%;
            height: 100%;
            flex: 1;
            object-fit: cover
        }

        .blocks-gallery-grid:not(.has-nested-images).columns-1 .blocks-gallery-image,
        .blocks-gallery-grid:not(.has-nested-images).columns-1 .blocks-gallery-item,
        .wp-block-gallery:not(.has-nested-images).columns-1 .blocks-gallery-image,
        .wp-block-gallery:not(.has-nested-images).columns-1 .blocks-gallery-item {
            width: 100%;
            margin-right: 0
        }

        @media (min-width:600px) {

            .blocks-gallery-grid:not(.has-nested-images).columns-3 .blocks-gallery-image,
            .blocks-gallery-grid:not(.has-nested-images).columns-3 .blocks-gallery-item,
            .wp-block-gallery:not(.has-nested-images).columns-3 .blocks-gallery-image,
            .wp-block-gallery:not(.has-nested-images).columns-3 .blocks-gallery-item {
                width: calc(33.33333% - .66667em);
                margin-right: 1em
            }

            .blocks-gallery-grid:not(.has-nested-images).columns-4 .blocks-gallery-image,
            .blocks-gallery-grid:not(.has-nested-images).columns-4 .blocks-gallery-item,
            .wp-block-gallery:not(.has-nested-images).columns-4 .blocks-gallery-image,
            .wp-block-gallery:not(.has-nested-images).columns-4 .blocks-gallery-item {
                width: calc(25% - .75em);
                margin-right: 1em
            }

            .blocks-gallery-grid:not(.has-nested-images).columns-5 .blocks-gallery-image,
            .blocks-gallery-grid:not(.has-nested-images).columns-5 .blocks-gallery-item,
            .wp-block-gallery:not(.has-nested-images).columns-5 .blocks-gallery-image,
            .wp-block-gallery:not(.has-nested-images).columns-5 .blocks-gallery-item {
                width: calc(20% - .8em);
                margin-right: 1em
            }

            .blocks-gallery-grid:not(.has-nested-images).columns-6 .blocks-gallery-image,
            .blocks-gallery-grid:not(.has-nested-images).columns-6 .blocks-gallery-item,
            .wp-block-gallery:not(.has-nested-images).columns-6 .blocks-gallery-image,
            .wp-block-gallery:not(.has-nested-images).columns-6 .blocks-gallery-item {
                width: calc(16.66667% - .83333em);
                margin-right: 1em
            }

            .blocks-gallery-grid:not(.has-nested-images).columns-7 .blocks-gallery-image,
            .blocks-gallery-grid:not(.has-nested-images).columns-7 .blocks-gallery-item,
            .wp-block-gallery:not(.has-nested-images).columns-7 .blocks-gallery-image,
            .wp-block-gallery:not(.has-nested-images).columns-7 .blocks-gallery-item {
                width: calc(14.28571% - .85714em);
                margin-right: 1em
            }

            .blocks-gallery-grid:not(.has-nested-images).columns-8 .blocks-gallery-image,
            .blocks-gallery-grid:not(.has-nested-images).columns-8 .blocks-gallery-item,
            .wp-block-gallery:not(.has-nested-images).columns-8 .blocks-gallery-image,
            .wp-block-gallery:not(.has-nested-images).columns-8 .blocks-gallery-item {
                width: calc(12.5% - .875em);
                margin-right: 1em
            }

            .blocks-gallery-grid:not(.has-nested-images).columns-1 .blocks-gallery-image:nth-of-type(1n),
            .blocks-gallery-grid:not(.has-nested-images).columns-1 .blocks-gallery-item:nth-of-type(1n),
            .blocks-gallery-grid:not(.has-nested-images).columns-2 .blocks-gallery-image:nth-of-type(2n),
            .blocks-gallery-grid:not(.has-nested-images).columns-2 .blocks-gallery-item:nth-of-type(2n),
            .blocks-gallery-grid:not(.has-nested-images).columns-3 .blocks-gallery-image:nth-of-type(3n),
            .blocks-gallery-grid:not(.has-nested-images).columns-3 .blocks-gallery-item:nth-of-type(3n),
            .blocks-gallery-grid:not(.has-nested-images).columns-4 .blocks-gallery-image:nth-of-type(4n),
            .blocks-gallery-grid:not(.has-nested-images).columns-4 .blocks-gallery-item:nth-of-type(4n),
            .blocks-gallery-grid:not(.has-nested-images).columns-5 .blocks-gallery-image:nth-of-type(5n),
            .blocks-gallery-grid:not(.has-nested-images).columns-5 .blocks-gallery-item:nth-of-type(5n),
            .blocks-gallery-grid:not(.has-nested-images).columns-6 .blocks-gallery-image:nth-of-type(6n),
            .blocks-gallery-grid:not(.has-nested-images).columns-6 .blocks-gallery-item:nth-of-type(6n),
            .blocks-gallery-grid:not(.has-nested-images).columns-7 .blocks-gallery-image:nth-of-type(7n),
            .blocks-gallery-grid:not(.has-nested-images).columns-7 .blocks-gallery-item:nth-of-type(7n),
            .blocks-gallery-grid:not(.has-nested-images).columns-8 .blocks-gallery-image:nth-of-type(8n),
            .blocks-gallery-grid:not(.has-nested-images).columns-8 .blocks-gallery-item:nth-of-type(8n),
            .wp-block-gallery:not(.has-nested-images).columns-1 .blocks-gallery-image:nth-of-type(1n),
            .wp-block-gallery:not(.has-nested-images).columns-1 .blocks-gallery-item:nth-of-type(1n),
            .wp-block-gallery:not(.has-nested-images).columns-2 .blocks-gallery-image:nth-of-type(2n),
            .wp-block-gallery:not(.has-nested-images).columns-2 .blocks-gallery-item:nth-of-type(2n),
            .wp-block-gallery:not(.has-nested-images).columns-3 .blocks-gallery-image:nth-of-type(3n),
            .wp-block-gallery:not(.has-nested-images).columns-3 .blocks-gallery-item:nth-of-type(3n),
            .wp-block-gallery:not(.has-nested-images).columns-4 .blocks-gallery-image:nth-of-type(4n),
            .wp-block-gallery:not(.has-nested-images).columns-4 .blocks-gallery-item:nth-of-type(4n),
            .wp-block-gallery:not(.has-nested-images).columns-5 .blocks-gallery-image:nth-of-type(5n),
            .wp-block-gallery:not(.has-nested-images).columns-5 .blocks-gallery-item:nth-of-type(5n),
            .wp-block-gallery:not(.has-nested-images).columns-6 .blocks-gallery-image:nth-of-type(6n),
            .wp-block-gallery:not(.has-nested-images).columns-6 .blocks-gallery-item:nth-of-type(6n),
            .wp-block-gallery:not(.has-nested-images).columns-7 .blocks-gallery-image:nth-of-type(7n),
            .wp-block-gallery:not(.has-nested-images).columns-7 .blocks-gallery-item:nth-of-type(7n),
            .wp-block-gallery:not(.has-nested-images).columns-8 .blocks-gallery-image:nth-of-type(8n),
            .wp-block-gallery:not(.has-nested-images).columns-8 .blocks-gallery-item:nth-of-type(8n) {
                margin-right: 0
            }
        }

        .blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-image:last-child,
        .blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-item:last-child,
        .wp-block-gallery:not(.has-nested-images) .blocks-gallery-image:last-child,
        .wp-block-gallery:not(.has-nested-images) .blocks-gallery-item:last-child {
            margin-right: 0
        }

        .blocks-gallery-grid:not(.has-nested-images).alignleft,
        .blocks-gallery-grid:not(.has-nested-images).alignright,
        .wp-block-gallery:not(.has-nested-images).alignleft,
        .wp-block-gallery:not(.has-nested-images).alignright {
            max-width: 420px;
            width: 100%
        }

        .blocks-gallery-grid:not(.has-nested-images).aligncenter .blocks-gallery-item figure,
        .wp-block-gallery:not(.has-nested-images).aligncenter .blocks-gallery-item figure {
            justify-content: center
        }

        .wp-block-gallery:not(.is-cropped) .blocks-gallery-item {
            align-self: flex-start
        }

        figure.wp-block-gallery.has-nested-images {
            align-items: normal
        }

        .wp-block-gallery.has-nested-images figure.wp-block-image:not(#individual-image) {
            width: calc(50% - var(--wp--style--unstable-gallery-gap, 16px)/2);
            margin: 0
        }

        .wp-block-gallery.has-nested-images figure.wp-block-image {
            display: flex;
            flex-grow: 1;
            justify-content: center;
            position: relative;
            flex-direction: column;
            max-width: 100%;
            box-sizing: border-box
        }

        .wp-block-gallery.has-nested-images figure.wp-block-image>a,
        .wp-block-gallery.has-nested-images figure.wp-block-image>div {
            margin: 0;
            flex-direction: column;
            flex-grow: 1
        }

        .wp-block-gallery.has-nested-images figure.wp-block-image img {
            display: block;
            height: auto;
            max-width: 100% !important;
            width: auto
        }

        .wp-block-gallery.has-nested-images figure.wp-block-image figcaption {
            background: linear-gradient(0deg, rgba(0, 0, 0, .7), rgba(0, 0, 0, .3) 70%, transparent);
            bottom: 0;
            color: #fff;
            font-size: 13px;
            left: 0;
            margin-bottom: 0;
            max-height: 60%;
            overflow: auto;
            padding: 0 8px 8px;
            position: absolute;
            text-align: center;
            width: 100%;
            box-sizing: border-box
        }

        .wp-block-gallery.has-nested-images figure.wp-block-image figcaption img {
            display: inline
        }

        .wp-block-gallery.has-nested-images figure.wp-block-image figcaption a {
            color: inherit
        }

        .wp-block-gallery.has-nested-images figure.wp-block-image.has-custom-border img {
            box-sizing: border-box
        }

        .wp-block-gallery.has-nested-images figure.wp-block-image.has-custom-border>a,
        .wp-block-gallery.has-nested-images figure.wp-block-image.has-custom-border>div,
        .wp-block-gallery.has-nested-images figure.wp-block-image.is-style-rounded>a,
        .wp-block-gallery.has-nested-images figure.wp-block-image.is-style-rounded>div {
            flex: 1 1 auto
        }

        .wp-block-gallery.has-nested-images figure.wp-block-image.has-custom-border figcaption,
        .wp-block-gallery.has-nested-images figure.wp-block-image.is-style-rounded figcaption {
            flex: initial;
            background: none;
            color: inherit;
            margin: 0;
            padding: 10px 10px 9px;
            position: relative
        }

        .wp-block-gallery.has-nested-images figcaption {
            flex-grow: 1;
            flex-basis: 100%;
            text-align: center
        }

        .wp-block-gallery.has-nested-images:not(.is-cropped) figure.wp-block-image:not(#individual-image) {
            margin-top: 0;
            margin-bottom: auto
        }

        .wp-block-gallery.has-nested-images.is-cropped figure.wp-block-image:not(#individual-image) {
            align-self: inherit
        }

        .wp-block-gallery.has-nested-images.is-cropped figure.wp-block-image:not(#individual-image)>a,
        .wp-block-gallery.has-nested-images.is-cropped figure.wp-block-image:not(#individual-image)>div:not(.components-drop-zone) {
            display: flex
        }

        .wp-block-gallery.has-nested-images.is-cropped figure.wp-block-image:not(#individual-image) a,
        .wp-block-gallery.has-nested-images.is-cropped figure.wp-block-image:not(#individual-image) img {
            width: 100%;
            flex: 1 0 0%;
            height: 100%;
            object-fit: cover
        }

        .wp-block-gallery.has-nested-images.columns-1 figure.wp-block-image:not(#individual-image) {
            width: 100%
        }

        @media (min-width:600px) {
            .wp-block-gallery.has-nested-images.columns-3 figure.wp-block-image:not(#individual-image) {
                width: calc(33.33333% - var(--wp--style--unstable-gallery-gap, 16px)*0.66667)
            }

            .wp-block-gallery.has-nested-images.columns-4 figure.wp-block-image:not(#individual-image) {
                width: calc(25% - var(--wp--style--unstable-gallery-gap, 16px)*0.75)
            }

            .wp-block-gallery.has-nested-images.columns-5 figure.wp-block-image:not(#individual-image) {
                width: calc(20% - var(--wp--style--unstable-gallery-gap, 16px)*0.8)
            }

            .wp-block-gallery.has-nested-images.columns-6 figure.wp-block-image:not(#individual-image) {
                width: calc(16.66667% - var(--wp--style--unstable-gallery-gap, 16px)*0.83333)
            }

            .wp-block-gallery.has-nested-images.columns-7 figure.wp-block-image:not(#individual-image) {
                width: calc(14.28571% - var(--wp--style--unstable-gallery-gap, 16px)*0.85714)
            }

            .wp-block-gallery.has-nested-images.columns-8 figure.wp-block-image:not(#individual-image) {
                width: calc(12.5% - var(--wp--style--unstable-gallery-gap, 16px)*0.875)
            }

            .wp-block-gallery.has-nested-images.columns-default figure.wp-block-image:not(#individual-image) {
                width: calc(33.33% - var(--wp--style--unstable-gallery-gap, 16px)*0.66667)
            }

            .wp-block-gallery.has-nested-images.columns-default figure.wp-block-image:not(#individual-image):first-child:nth-last-child(2),
            .wp-block-gallery.has-nested-images.columns-default figure.wp-block-image:not(#individual-image):first-child:nth-last-child(2)~figure.wp-block-image:not(#individual-image) {
                width: calc(50% - var(--wp--style--unstable-gallery-gap, 16px)*0.5)
            }

            .wp-block-gallery.has-nested-images.columns-default figure.wp-block-image:not(#individual-image):first-child:last-child {
                width: 100%
            }
        }

        .wp-block-gallery.has-nested-images.alignleft,
        .wp-block-gallery.has-nested-images.alignright {
            max-width: 420px;
            width: 100%
        }

        .wp-block-gallery.has-nested-images.aligncenter {
            justify-content: center
        }

        .wp-block-group {
            box-sizing: border-box
        }

        h1.has-background,
        h2.has-background,
        h3.has-background,
        h4.has-background,
        h5.has-background,
        h6.has-background {
            padding: 1.25em 2.375em
        }

        .wp-block-image img {
            height: auto;
            max-width: 100%;
            vertical-align: bottom
        }

        .wp-block-image.has-custom-border img,
        .wp-block-image img {
            box-sizing: border-box
        }

        .wp-block-image.aligncenter {
            text-align: center
        }

        .wp-block-image.alignfull img,
        .wp-block-image.alignwide img {
            height: auto;
            width: 100%
        }

        .wp-block-image.aligncenter,
        .wp-block-image .aligncenter,
        .wp-block-image.alignleft,
        .wp-block-image .alignleft,
        .wp-block-image.alignright,
        .wp-block-image .alignright {
            display: table
        }

        .wp-block-image.aligncenter>figcaption,
        .wp-block-image .aligncenter>figcaption,
        .wp-block-image.alignleft>figcaption,
        .wp-block-image .alignleft>figcaption,
        .wp-block-image.alignright>figcaption,
        .wp-block-image .alignright>figcaption {
            display: table-caption;
            caption-side: bottom
        }

        .wp-block-image .alignleft {
            float: left;
            margin: .5em 1em .5em 0
        }

        .wp-block-image .alignright {
            float: right;
            margin: .5em 0 .5em 1em
        }

        .wp-block-image .aligncenter {
            margin-left: auto;
            margin-right: auto
        }

        .wp-block-image figcaption {
            margin-top: .5em;
            margin-bottom: 1em
        }

        .wp-block-image.is-style-circle-mask img,
        .wp-block-image.is-style-rounded img,
        .wp-block-image .is-style-rounded img {
            border-radius: 9999px
        }

        @supports ((-webkit-mask-image:none) or (mask-image:none)) or (-webkit-mask-image:none) {
            .wp-block-image.is-style-circle-mask img {
                -webkit-mask-image: url('data:image/svg+xml;utf8,<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"/></svg>');
                mask-image: url('data:image/svg+xml;utf8,<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"/></svg>');
                mask-mode: alpha;
                -webkit-mask-repeat: no-repeat;
                mask-repeat: no-repeat;
                -webkit-mask-size: contain;
                mask-size: contain;
                -webkit-mask-position: center;
                mask-position: center;
                border-radius: 0
            }
        }

        .wp-block-image :where(.has-border-color) {
            border-style: solid
        }

        .wp-block-image :where([style*=border-top-color]) {
            border-top-style: solid
        }

        .wp-block-image :where([style*=border-right-color]) {
            border-right-style: solid
        }

        .wp-block-image :where([style*=border-bottom-color]) {
            border-bottom-style: solid
        }

        .wp-block-image :where([style*=border-left-color]) {
            border-left-style: solid
        }

        .wp-block-image :where([style*=border-width]) {
            border-style: solid
        }

        .wp-block-image :where([style*=border-top-width]) {
            border-top-style: solid
        }

        .wp-block-image :where([style*=border-right-width]) {
            border-right-style: solid
        }

        .wp-block-image :where([style*=border-bottom-width]) {
            border-bottom-style: solid
        }

        .wp-block-image :where([style*=border-left-width]) {
            border-left-style: solid
        }

        .wp-block-image figure {
            margin: 0
        }

        ol.wp-block-latest-comments {
            margin-left: 0
        }

        .wp-block-latest-comments .wp-block-latest-comments {
            padding-left: 0
        }

        .wp-block-latest-comments__comment {
            line-height: 1.1;
            list-style: none;
            margin-bottom: 1em
        }

        .has-avatars .wp-block-latest-comments__comment {
            min-height: 2.25em;
            list-style: none
        }

        .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-excerpt,
        .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-meta {
            margin-left: 3.25em
        }

        .has-dates .wp-block-latest-comments__comment,
        .has-excerpts .wp-block-latest-comments__comment {
            line-height: 1.5
        }

        .wp-block-latest-comments__comment-excerpt p {
            font-size: .875em;
            line-height: 1.8;
            margin: .36em 0 1.4em
        }

        .wp-block-latest-comments__comment-date {
            display: block;
            font-size: .75em
        }

        .wp-block-latest-comments .avatar,
        .wp-block-latest-comments__comment-avatar {
            border-radius: 1.5em;
            display: block;
            float: left;
            height: 2.5em;
            margin-right: .75em;
            width: 2.5em
        }

        .wp-block-latest-posts.alignleft {
            margin-right: 2em
        }

        .wp-block-latest-posts.alignright {
            margin-left: 2em
        }

        .wp-block-latest-posts.wp-block-latest-posts__list {
            list-style: none;
            padding-left: 0
        }

        .wp-block-latest-posts.wp-block-latest-posts__list li {
            clear: both
        }

        .wp-block-latest-posts.is-grid {
            display: flex;
            flex-wrap: wrap;
            padding: 0
        }

        .wp-block-latest-posts.is-grid li {
            margin: 0 1.25em 1.25em 0;
            width: 100%
        }

        @media (min-width:600px) {
            .wp-block-latest-posts.columns-2 li {
                width: calc(50% - .625em)
            }

            .wp-block-latest-posts.columns-2 li:nth-child(2n) {
                margin-right: 0
            }

            .wp-block-latest-posts.columns-3 li {
                width: calc(33.33333% - .83333em)
            }

            .wp-block-latest-posts.columns-3 li:nth-child(3n) {
                margin-right: 0
            }

            .wp-block-latest-posts.columns-4 li {
                width: calc(25% - .9375em)
            }

            .wp-block-latest-posts.columns-4 li:nth-child(4n) {
                margin-right: 0
            }

            .wp-block-latest-posts.columns-5 li {
                width: calc(20% - 1em)
            }

            .wp-block-latest-posts.columns-5 li:nth-child(5n) {
                margin-right: 0
            }

            .wp-block-latest-posts.columns-6 li {
                width: calc(16.66667% - 1.04167em)
            }

            .wp-block-latest-posts.columns-6 li:nth-child(6n) {
                margin-right: 0
            }
        }

        .wp-block-latest-posts__post-author,
        .wp-block-latest-posts__post-date {
            display: block;
            font-size: .8125em
        }

        .wp-block-latest-posts__post-excerpt {
            margin-top: .5em;
            margin-bottom: 1em
        }

        .wp-block-latest-posts__featured-image a {
            display: inline-block
        }

        .wp-block-latest-posts__featured-image img {
            height: auto;
            width: auto;
            max-width: 100%
        }

        .wp-block-latest-posts__featured-image.alignleft {
            margin-right: 1em;
            float: left
        }

        .wp-block-latest-posts__featured-image.alignright {
            margin-left: 1em;
            float: right
        }

        .wp-block-latest-posts__featured-image.aligncenter {
            margin-bottom: 1em;
            text-align: center
        }

        ol,
        ul {
            box-sizing: border-box
        }

        ol.has-background,
        ul.has-background {
            padding: 1.25em 2.375em
        }

        .wp-block-media-text {
            /*!rtl:begin:ignore*/
            direction: ltr;
            /*!rtl:end:ignore*/
            display: grid;
            grid-template-columns: 50% 1fr;
            grid-template-rows: auto;
            box-sizing: border-box
        }

        .wp-block-media-text.has-media-on-the-right {
            grid-template-columns: 1fr 50%
        }

        .wp-block-media-text.is-vertically-aligned-top .wp-block-media-text__content,
        .wp-block-media-text.is-vertically-aligned-top .wp-block-media-text__media {
            align-self: start
        }

        .wp-block-media-text.is-vertically-aligned-center .wp-block-media-text__content,
        .wp-block-media-text.is-vertically-aligned-center .wp-block-media-text__media,
        .wp-block-media-text .wp-block-media-text__content,
        .wp-block-media-text .wp-block-media-text__media {
            align-self: center
        }

        .wp-block-media-text.is-vertically-aligned-bottom .wp-block-media-text__content,
        .wp-block-media-text.is-vertically-aligned-bottom .wp-block-media-text__media {
            align-self: end
        }

        .wp-block-media-text .wp-block-media-text__media {
            /*!rtl:begin:ignore*/
            grid-column: 1;
            grid-row: 1;
            /*!rtl:end:ignore*/
            margin: 0
        }

        .wp-block-media-text .wp-block-media-text__content {
            direction: ltr;
            /*!rtl:begin:ignore*/
            grid-column: 2;
            grid-row: 1;
            /*!rtl:end:ignore*/
            padding: 0 8%;
            word-break: break-word
        }

        .wp-block-media-text.has-media-on-the-right .wp-block-media-text__media {
            /*!rtl:begin:ignore*/
            grid-column: 2;
            grid-row: 1
                /*!rtl:end:ignore*/
        }

        .wp-block-media-text.has-media-on-the-right .wp-block-media-text__content {
            /*!rtl:begin:ignore*/
            grid-column: 1;
            grid-row: 1
                /*!rtl:end:ignore*/
        }

        .wp-block-media-text__media img,
        .wp-block-media-text__media video {
            height: auto;
            max-width: unset;
            width: 100%;
            vertical-align: middle
        }

        .wp-block-media-text.is-image-fill .wp-block-media-text__media {
            height: 100%;
            min-height: 250px;
            background-size: cover
        }

        .wp-block-media-text.is-image-fill .wp-block-media-text__media>a {
            display: block;
            height: 100%
        }

        .wp-block-media-text.is-image-fill .wp-block-media-text__media img {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0
        }

        @media (max-width:600px) {
            .wp-block-media-text.is-stacked-on-mobile {
                grid-template-columns: 100% !important
            }

            .wp-block-media-text.is-stacked-on-mobile .wp-block-media-text__media {
                grid-column: 1;
                grid-row: 1
            }

            .wp-block-media-text.is-stacked-on-mobile .wp-block-media-text__content {
                grid-column: 1;
                grid-row: 2
            }
        }

        .wp-block-navigation {
            position: relative;
            --navigation-layout-justification-setting: flex-start;
            --navigation-layout-direction: row;
            --navigation-layout-wrap: wrap;
            --navigation-layout-justify: flex-start;
            --navigation-layout-align: center
        }

        .wp-block-navigation ul {
            margin-top: 0;
            margin-bottom: 0;
            margin-left: 0;
            padding-left: 0
        }

        .wp-block-navigation ul,
        .wp-block-navigation ul li {
            list-style: none;
            padding: 0
        }

        .wp-block-navigation .wp-block-navigation-item {
            display: flex;
            align-items: center;
            position: relative
        }

        .wp-block-navigation .wp-block-navigation-item .wp-block-navigation__submenu-container:empty {
            display: none
        }

        .wp-block-navigation .wp-block-navigation-item__content {
            display: block
        }

        .wp-block-navigation.has-text-decoration-underline .wp-block-navigation-item__content,
        .wp-block-navigation.has-text-decoration-underline .wp-block-navigation-item__content:active,
        .wp-block-navigation.has-text-decoration-underline .wp-block-navigation-item__content:focus {
            text-decoration: underline
        }

        .wp-block-navigation.has-text-decoration-line-through .wp-block-navigation-item__content,
        .wp-block-navigation.has-text-decoration-line-through .wp-block-navigation-item__content:active,
        .wp-block-navigation.has-text-decoration-line-through .wp-block-navigation-item__content:focus {
            text-decoration: line-through
        }

        .wp-block-navigation:where(:not([class*=has-text-decoration])) a,
        .wp-block-navigation:where(:not([class*=has-text-decoration])) a:active,
        .wp-block-navigation:where(:not([class*=has-text-decoration])) a:focus {
            text-decoration: none
        }

        .wp-block-navigation .wp-block-navigation__submenu-icon {
            align-self: center;
            line-height: 0;
            display: inline-block;
            font-size: inherit;
            padding: 0;
            background-color: inherit;
            color: currentColor;
            border: none;
            width: .6em;
            height: .6em;
            margin-left: .25em
        }

        .wp-block-navigation .wp-block-navigation__submenu-icon svg {
            display: inline-block;
            stroke: currentColor;
            width: inherit;
            height: inherit;
            margin-top: .075em
        }

        .wp-block-navigation.is-vertical {
            --navigation-layout-direction: column;
            --navigation-layout-justify: initial;
            --navigation-layout-align: flex-start
        }

        .wp-block-navigation.no-wrap {
            --navigation-layout-wrap: nowrap
        }

        .wp-block-navigation.items-justified-center {
            --navigation-layout-justification-setting: center;
            --navigation-layout-justify: center
        }

        .wp-block-navigation.items-justified-center.is-vertical {
            --navigation-layout-align: center
        }

        .wp-block-navigation.items-justified-right {
            --navigation-layout-justification-setting: flex-end;
            --navigation-layout-justify: flex-end
        }

        .wp-block-navigation.items-justified-right.is-vertical {
            --navigation-layout-align: flex-end
        }

        .wp-block-navigation.items-justified-space-between {
            --navigation-layout-justification-setting: space-between;
            --navigation-layout-justify: space-between
        }

        .wp-block-navigation .has-child .wp-block-navigation__submenu-container {
            background-color: inherit;
            color: inherit;
            position: absolute;
            z-index: 2;
            display: flex;
            flex-direction: column;
            align-items: normal;
            opacity: 0;
            transition: opacity .1s linear;
            visibility: hidden;
            width: 0;
            height: 0;
            overflow: hidden;
            left: -1px;
            top: 100%
        }

        .wp-block-navigation .has-child .wp-block-navigation__submenu-container>.wp-block-navigation-item>.wp-block-navigation-item__content {
            display: flex;
            flex-grow: 1
        }

        .wp-block-navigation .has-child .wp-block-navigation__submenu-container>.wp-block-navigation-item>.wp-block-navigation-item__content .wp-block-navigation__submenu-icon {
            margin-right: 0;
            margin-left: auto
        }

        .wp-block-navigation .has-child .wp-block-navigation__submenu-container .wp-block-navigation-item__content {
            margin: 0
        }

        @media (min-width:782px) {
            .wp-block-navigation .has-child .wp-block-navigation__submenu-container .wp-block-navigation__submenu-container {
                left: 100%;
                top: -1px
            }

            .wp-block-navigation .has-child .wp-block-navigation__submenu-container .wp-block-navigation__submenu-container:before {
                content: "";
                position: absolute;
                right: 100%;
                height: 100%;
                display: block;
                width: .5em;
                background: transparent
            }

            .wp-block-navigation .has-child .wp-block-navigation__submenu-container .wp-block-navigation__submenu-icon {
                margin-right: .25em
            }

            .wp-block-navigation .has-child .wp-block-navigation__submenu-container .wp-block-navigation__submenu-icon svg {
                transform: rotate(-90deg)
            }
        }

        .wp-block-navigation .has-child:not(.open-on-click):hover>.wp-block-navigation__submenu-container {
            visibility: visible;
            overflow: visible;
            opacity: 1;
            width: auto;
            height: auto;
            min-width: 200px
        }

        .wp-block-navigation .has-child:not(.open-on-click):not(.open-on-hover-click):focus-within>.wp-block-navigation__submenu-container {
            visibility: visible;
            overflow: visible;
            opacity: 1;
            width: auto;
            height: auto;
            min-width: 200px
        }

        .wp-block-navigation .has-child .wp-block-navigation-submenu__toggle[aria-expanded=true]~.wp-block-navigation__submenu-container {
            visibility: visible;
            overflow: visible;
            opacity: 1;
            width: auto;
            height: auto;
            min-width: 200px
        }

        .wp-block-navigation.has-background .has-child .wp-block-navigation__submenu-container {
            left: 0;
            top: 100%
        }

        @media (min-width:782px) {
            .wp-block-navigation.has-background .has-child .wp-block-navigation__submenu-container .wp-block-navigation__submenu-container {
                left: 100%;
                top: 0
            }
        }

        .wp-block-navigation-submenu {
            position: relative;
            display: flex
        }

        .wp-block-navigation-submenu .wp-block-navigation__submenu-icon svg {
            stroke: currentColor
        }

        button.wp-block-navigation-item__content {
            background-color: transparent;
            border: none;
            color: currentColor;
            font-size: inherit;
            font-family: inherit;
            line-height: inherit;
            font-style: inherit;
            font-weight: inherit;
            text-transform: inherit;
            text-align: left
        }

        .wp-block-navigation-submenu__toggle {
            cursor: pointer
        }

        .wp-block-navigation-item.open-on-click .wp-block-navigation-submenu__toggle {
            padding-right: .85em
        }

        .wp-block-navigation-item.open-on-click .wp-block-navigation-submenu__toggle+.wp-block-navigation__submenu-icon {
            margin-left: -.6em;
            pointer-events: none
        }

        .wp-block-navigation .wp-block-page-list,
        .wp-block-navigation__container,
        .wp-block-navigation__responsive-close,
        .wp-block-navigation__responsive-container,
        .wp-block-navigation__responsive-container-content,
        .wp-block-navigation__responsive-dialog {
            gap: inherit
        }

        :where(.wp-block-navigation.has-background .wp-block-navigation-item a:not(.wp-element-button)),
        :where(.wp-block-navigation.has-background .wp-block-navigation-submenu a:not(.wp-element-button)),
        :where(.wp-block-navigation .wp-block-navigation__submenu-container .wp-block-navigation-item a:not(.wp-element-button)),
        :where(.wp-block-navigation .wp-block-navigation__submenu-container .wp-block-navigation-submenu a:not(.wp-element-button)) {
            padding: .5em 1em
        }

        .wp-block-navigation.items-justified-right .wp-block-navigation__container .has-child .wp-block-navigation__submenu-container,
        .wp-block-navigation.items-justified-right .wp-block-page-list>.has-child .wp-block-navigation__submenu-container,
        .wp-block-navigation.items-justified-space-between .wp-block-page-list>.has-child:last-child .wp-block-navigation__submenu-container,
        .wp-block-navigation.items-justified-space-between>.wp-block-navigation__container>.has-child:last-child .wp-block-navigation__submenu-container {
            left: auto;
            right: 0
        }

        .wp-block-navigation.items-justified-right .wp-block-navigation__container .has-child .wp-block-navigation__submenu-container .wp-block-navigation__submenu-container,
        .wp-block-navigation.items-justified-right .wp-block-page-list>.has-child .wp-block-navigation__submenu-container .wp-block-navigation__submenu-container,
        .wp-block-navigation.items-justified-space-between .wp-block-page-list>.has-child:last-child .wp-block-navigation__submenu-container .wp-block-navigation__submenu-container,
        .wp-block-navigation.items-justified-space-between>.wp-block-navigation__container>.has-child:last-child .wp-block-navigation__submenu-container .wp-block-navigation__submenu-container {
            left: -1px;
            right: -1px
        }

        @media (min-width:782px) {

            .wp-block-navigation.items-justified-right .wp-block-navigation__container .has-child .wp-block-navigation__submenu-container .wp-block-navigation__submenu-container,
            .wp-block-navigation.items-justified-right .wp-block-page-list>.has-child .wp-block-navigation__submenu-container .wp-block-navigation__submenu-container,
            .wp-block-navigation.items-justified-space-between .wp-block-page-list>.has-child:last-child .wp-block-navigation__submenu-container .wp-block-navigation__submenu-container,
            .wp-block-navigation.items-justified-space-between>.wp-block-navigation__container>.has-child:last-child .wp-block-navigation__submenu-container .wp-block-navigation__submenu-container {
                left: auto;
                right: 100%
            }
        }

        .wp-block-navigation:not(.has-background) .wp-block-navigation__submenu-container {
            background-color: #fff;
            color: #000;
            border: 1px solid rgba(0, 0, 0, .15)
        }

        .wp-block-navigation__container {
            display: flex;
            flex-wrap: var(--navigation-layout-wrap, wrap);
            flex-direction: var(--navigation-layout-direction, initial);
            justify-content: var(--navigation-layout-justify, initial);
            align-items: var(--navigation-layout-align, initial);
            list-style: none;
            margin: 0;
            padding-left: 0
        }

        .wp-block-navigation__container .is-responsive {
            display: none
        }

        .wp-block-navigation__container:only-child,
        .wp-block-page-list:only-child {
            flex-grow: 1
        }

        @keyframes overlay-menu__fade-in-animation {
            0% {
                opacity: 0;
                transform: translateY(.5em)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        .wp-block-navigation__responsive-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0
        }

        .wp-block-navigation__responsive-container .wp-block-navigation-link a {
            color: inherit
        }

        .wp-block-navigation__responsive-container .wp-block-navigation__responsive-container-content {
            display: flex;
            flex-wrap: var(--navigation-layout-wrap, wrap);
            flex-direction: var(--navigation-layout-direction, initial);
            justify-content: var(--navigation-layout-justify, initial);
            align-items: var(--navigation-layout-align, initial)
        }

        .wp-block-navigation__responsive-container:not(.is-menu-open.is-menu-open) {
            color: inherit !important;
            background-color: inherit !important
        }

        .wp-block-navigation__responsive-container.is-menu-open {
            display: flex;
            flex-direction: column;
            background-color: inherit;
            animation: overlay-menu__fade-in-animation .1s ease-out;
            animation-fill-mode: forwards;
            padding: var(--wp--style--root--padding-top, 2rem) var(--wp--style--root--padding-right, 2rem) var(--wp--style--root--padding-bottom, 2rem) var(--wp--style--root--padding-left, 2rem);
            overflow: auto;
            z-index: 100000
        }

        @media (prefers-reduced-motion:reduce) {
            .wp-block-navigation__responsive-container.is-menu-open {
                animation-duration: 1ms;
                animation-delay: 0s
            }
        }

        .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content {
            padding-top: calc(2rem + 24px);
            overflow: visible;
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            align-items: var(--navigation-layout-justification-setting, inherit)
        }

        .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content,
        .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content .wp-block-navigation__container,
        .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content .wp-block-page-list {
            justify-content: flex-start
        }

        .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content .wp-block-navigation__submenu-icon {
            display: none
        }

        .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content .has-child .submenu-container,
        .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content .has-child .wp-block-navigation__submenu-container {
            opacity: 1;
            visibility: visible;
            height: auto;
            width: auto;
            overflow: initial;
            min-width: 200px;
            position: static;
            border: none;
            padding-left: 2rem;
            padding-right: 2rem
        }

        .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content .wp-block-navigation__container,
        .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content .wp-block-navigation__submenu-container {
            gap: inherit
        }

        .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content .wp-block-navigation__submenu-container {
            padding-top: var(--wp--style--block-gap, 2em)
        }

        .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content .wp-block-navigation-item__content {
            padding: 0
        }

        .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content .wp-block-navigation-item,
        .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content .wp-block-navigation__container,
        .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__responsive-container-content .wp-block-page-list {
            display: flex;
            flex-direction: column;
            align-items: var(--navigation-layout-justification-setting, initial)
        }

        .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation-item,
        .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation-item .wp-block-navigation__submenu-container,
        .wp-block-navigation__responsive-container.is-menu-open .wp-block-page-list {
            color: inherit !important;
            background: transparent !important
        }

        .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__submenu-container.wp-block-navigation__submenu-container.wp-block-navigation__submenu-container.wp-block-navigation__submenu-container {
            right: auto;
            left: auto
        }

        @media (min-width:600px) {
            .wp-block-navigation__responsive-container:not(.hidden-by-default):not(.is-menu-open) {
                display: block;
                width: 100%;
                position: relative;
                z-index: auto;
                background-color: inherit
            }

            .wp-block-navigation__responsive-container:not(.hidden-by-default):not(.is-menu-open) .wp-block-navigation__responsive-container-close {
                display: none
            }

            .wp-block-navigation__responsive-container.is-menu-open .wp-block-navigation__submenu-container.wp-block-navigation__submenu-container.wp-block-navigation__submenu-container.wp-block-navigation__submenu-container {
                left: 0
            }
        }

        .wp-block-navigation:not(.has-background) .wp-block-navigation__responsive-container.is-menu-open {
            background-color: #fff;
            color: #000
        }

        .wp-block-navigation__toggle_button_label {
            font-size: 1rem;
            font-weight: 700
        }

        .wp-block-navigation__responsive-container-close,
        .wp-block-navigation__responsive-container-open {
            vertical-align: middle;
            cursor: pointer;
            color: currentColor;
            background: transparent;
            border: none;
            margin: 0;
            padding: 0;
            text-transform: inherit
        }

        .wp-block-navigation__responsive-container-close svg,
        .wp-block-navigation__responsive-container-open svg {
            fill: currentColor;
            pointer-events: none;
            display: block;
            width: 24px;
            height: 24px
        }

        .wp-block-navigation__responsive-container-open {
            display: flex
        }

        @media (min-width:600px) {
            .wp-block-navigation__responsive-container-open:not(.always-shown) {
                display: none
            }
        }

        .wp-block-navigation__responsive-container-close {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 2
        }

        .wp-block-navigation__responsive-close {
            width: 100%;
            max-width: var(--wp--style--global--wide-size, 100%);
            margin-left: auto;
            margin-right: auto
        }

        .wp-block-navigation__responsive-close:focus {
            outline: none
        }

        .is-menu-open .wp-block-navigation__responsive-close,
        .is-menu-open .wp-block-navigation__responsive-container-content,
        .is-menu-open .wp-block-navigation__responsive-dialog {
            box-sizing: border-box
        }

        .wp-block-navigation__responsive-dialog {
            position: relative
        }

        .has-modal-open .admin-bar .is-menu-open .wp-block-navigation__responsive-dialog {
            margin-top: 46px
        }

        @media (min-width:782px) {
            .has-modal-open .admin-bar .is-menu-open .wp-block-navigation__responsive-dialog {
                margin-top: 32px
            }
        }

        html.has-modal-open {
            overflow: hidden
        }

        .wp-block-navigation .wp-block-navigation-item__label {
            word-break: normal;
            overflow-wrap: break-word
        }

        .wp-block-navigation .wp-block-navigation-item__description {
            display: none
        }

        .wp-block-navigation .wp-block-page-list {
            display: flex;
            flex-direction: var(--navigation-layout-direction, initial);
            justify-content: var(--navigation-layout-justify, initial);
            align-items: var(--navigation-layout-align, initial);
            flex-wrap: var(--navigation-layout-wrap, wrap);
            background-color: inherit
        }

        .wp-block-navigation .wp-block-navigation-item {
            background-color: inherit
        }

        .is-small-text {
            font-size: .875em
        }

        .is-regular-text {
            font-size: 1em
        }

        .is-large-text {
            font-size: 2.25em
        }

        .is-larger-text {
            font-size: 3em
        }

        .has-drop-cap:not(:focus):first-letter {
            float: left;
            font-size: 8.4em;
            line-height: .68;
            font-weight: 100;
            margin: .05em .1em 0 0;
            text-transform: uppercase;
            font-style: normal
        }

        p.has-drop-cap.has-background {
            overflow: hidden
        }

        p.has-background {
            padding: 1.25em 2.375em
        }

        :where(p.has-text-color:not(.has-link-color)) a {
            color: inherit
        }

        .wp-block-post-author {
            display: flex;
            flex-wrap: wrap
        }

        .wp-block-post-author__byline {
            width: 100%;
            margin-top: 0;
            margin-bottom: 0;
            font-size: .5em
        }

        .wp-block-post-author__avatar {
            margin-right: 1em
        }

        .wp-block-post-author__bio {
            margin-bottom: .7em;
            font-size: .7em
        }

        .wp-block-post-author__content {
            flex-grow: 1;
            flex-basis: 0
        }

        .wp-block-post-author__name {
            margin: 0
        }

        .wp-block-post-comments-form[style*=font-weight] :where(.comment-reply-title) {
            font-weight: inherit
        }

        .wp-block-post-comments-form[style*=font-family] :where(.comment-reply-title) {
            font-family: inherit
        }

        .wp-block-post-comments-form[class*=-font-size] :where(.comment-reply-title),
        .wp-block-post-comments-form[style*=font-size] :where(.comment-reply-title) {
            font-size: inherit
        }

        .wp-block-post-comments-form[style*=line-height] :where(.comment-reply-title) {
            line-height: inherit
        }

        .wp-block-post-comments-form[style*=font-style] :where(.comment-reply-title) {
            font-style: inherit
        }

        .wp-block-post-comments-form[style*=letter-spacing] :where(.comment-reply-title) {
            letter-spacing: inherit
        }

        .wp-block-post-comments-form input[type=submit] {
            box-shadow: none;
            cursor: pointer;
            display: inline-block;
            text-align: center;
            overflow-wrap: break-word
        }

        .wp-block-post-comments-form input:not([type=submit]),
        .wp-block-post-comments-form textarea {
            border: 1px solid #949494;
            font-size: 1em;
            font-family: inherit
        }

        .wp-block-post-comments-form input:not([type=submit]):not([type=checkbox]),
        .wp-block-post-comments-form textarea {
            padding: calc(.667em + 2px)
        }

        .wp-block-post-comments-form .comment-form input:not([type=submit]):not([type=checkbox]),
        .wp-block-post-comments-form .comment-form textarea {
            display: block;
            box-sizing: border-box;
            width: 100%
        }

        .wp-block-post-comments-form .comment-form-author label,
        .wp-block-post-comments-form .comment-form-email label,
        .wp-block-post-comments-form .comment-form-url label {
            display: block;
            margin-bottom: .25em
        }

        .wp-block-post-comments-form .comment-form-cookies-consent {
            display: flex;
            gap: .25em
        }

        .wp-block-post-comments-form .comment-form-cookies-consent #wp-comment-cookies-consent {
            margin-top: .35em
        }

        .wp-block-post-comments-form .comment-reply-title {
            margin-bottom: 0
        }

        .wp-block-post-comments-form .comment-reply-title :where(small) {
            font-size: var(--wp--preset--font-size--medium, smaller);
            margin-left: .5em
        }

        .wp-block-post-date {
            box-sizing: border-box
        }

        .wp-block-post-excerpt__more-link {
            display: inline-block
        }

        .wp-block-post-featured-image {
            margin-left: 0;
            margin-right: 0
        }

        .wp-block-post-featured-image a {
            display: block
        }

        .wp-block-post-featured-image img {
            max-width: 100%;
            width: 100%;
            height: auto;
            vertical-align: bottom;
            box-sizing: border-box
        }

        .wp-block-post-featured-image.alignfull img,
        .wp-block-post-featured-image.alignwide img {
            width: 100%
        }

        .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim {
            position: absolute;
            inset: 0;
            background-color: #000
        }

        .wp-block-post-featured-image {
            position: relative
        }

        .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-gradient {
            background-color: transparent
        }

        .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-0 {
            opacity: 0
        }

        .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-10 {
            opacity: .1
        }

        .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-20 {
            opacity: .2
        }

        .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-30 {
            opacity: .3
        }

        .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-40 {
            opacity: .4
        }

        .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-50 {
            opacity: .5
        }

        .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-60 {
            opacity: .6
        }

        .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-70 {
            opacity: .7
        }

        .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-80 {
            opacity: .8
        }

        .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-90 {
            opacity: .9
        }

        .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-100 {
            opacity: 1
        }

        .wp-block-post-terms__separator {
            white-space: pre-wrap
        }

        .wp-block-post-title {
            word-break: break-word;
            box-sizing: border-box
        }

        .wp-block-post-title a {
            display: inline-block
        }

        .wp-block-preformatted {
            white-space: pre-wrap
        }

        .wp-block-preformatted.has-background {
            padding: 1.25em 2.375em
        }

        .wp-block-pullquote {
            margin: 0 0 1em;
            padding: 3em 0;
            text-align: center;
            overflow-wrap: break-word;
            box-sizing: border-box
        }

        .wp-block-pullquote blockquote,
        .wp-block-pullquote cite,
        .wp-block-pullquote p {
            color: inherit
        }

        .wp-block-pullquote.alignleft,
        .wp-block-pullquote.alignright {
            max-width: 420px
        }

        .wp-block-pullquote cite,
        .wp-block-pullquote footer {
            position: relative
        }

        .wp-block-pullquote .has-text-color a {
            color: inherit
        }

        .wp-block-pullquote.has-text-align-left blockquote {
            text-align: left
        }

        .wp-block-pullquote.has-text-align-right blockquote {
            text-align: right
        }

        .wp-block-pullquote.is-style-solid-color {
            border: none
        }

        .wp-block-pullquote.is-style-solid-color blockquote {
            margin-left: auto;
            margin-right: auto;
            max-width: 60%
        }

        .wp-block-pullquote.is-style-solid-color blockquote p {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 2em
        }

        .wp-block-pullquote.is-style-solid-color blockquote cite {
            text-transform: none;
            font-style: normal
        }

        .wp-block-pullquote cite {
            color: inherit
        }

        .wp-block-post-template {
            margin-top: 0;
            margin-bottom: 0;
            max-width: 100%;
            list-style: none;
            padding: 0
        }

        .wp-block-post-template.wp-block-post-template {
            background: none
        }

        .wp-block-post-template.is-flex-container {
            flex-direction: row;
            display: flex;
            flex-wrap: wrap;
            gap: 1.25em
        }

        .wp-block-post-template.is-flex-container li {
            margin: 0;
            width: 100%
        }

        @media (min-width:600px) {
            .wp-block-post-template.is-flex-container.is-flex-container.columns-2>li {
                width: calc(50% - .625em)
            }

            .wp-block-post-template.is-flex-container.is-flex-container.columns-3>li {
                width: calc(33.33333% - .83333em)
            }

            .wp-block-post-template.is-flex-container.is-flex-container.columns-4>li {
                width: calc(25% - .9375em)
            }

            .wp-block-post-template.is-flex-container.is-flex-container.columns-5>li {
                width: calc(20% - 1em)
            }

            .wp-block-post-template.is-flex-container.is-flex-container.columns-6>li {
                width: calc(16.66667% - 1.04167em)
            }
        }

        .wp-block-query-pagination>.wp-block-query-pagination-next,
        .wp-block-query-pagination>.wp-block-query-pagination-numbers,
        .wp-block-query-pagination>.wp-block-query-pagination-previous {
            margin-right: .5em;
            margin-bottom: .5em
        }

        .wp-block-query-pagination>.wp-block-query-pagination-next:last-child,
        .wp-block-query-pagination>.wp-block-query-pagination-numbers:last-child,
        .wp-block-query-pagination>.wp-block-query-pagination-previous:last-child {
            margin-right: 0
        }

        .wp-block-query-pagination.is-content-justification-space-between>.wp-block-query-pagination-next:last-child {
            margin-inline-start: auto
        }

        .wp-block-query-pagination.is-content-justification-space-between>.wp-block-query-pagination-previous:first-child {
            margin-inline-end: auto
        }

        .wp-block-query-pagination .wp-block-query-pagination-previous-arrow {
            margin-right: 1ch;
            display: inline-block
        }

        .wp-block-query-pagination .wp-block-query-pagination-previous-arrow:not(.is-arrow-chevron) {
            transform: scaleX(1)
        }

        .wp-block-query-pagination .wp-block-query-pagination-next-arrow {
            margin-left: 1ch;
            display: inline-block
        }

        .wp-block-query-pagination .wp-block-query-pagination-next-arrow:not(.is-arrow-chevron) {
            transform: scaleX(1)
        }

        .wp-block-query-pagination.aligncenter {
            justify-content: center
        }

        .wp-block-query-title,
        .wp-block-quote {
            box-sizing: border-box
        }

        .wp-block-quote {
            overflow-wrap: break-word
        }

        .wp-block-quote.is-large:not(.is-style-plain),
        .wp-block-quote.is-style-large:not(.is-style-plain) {
            margin-bottom: 1em;
            padding: 0 1em
        }

        .wp-block-quote.is-large:not(.is-style-plain) p,
        .wp-block-quote.is-style-large:not(.is-style-plain) p {
            font-size: 1.5em;
            font-style: italic;
            line-height: 1.6
        }

        .wp-block-quote.is-large:not(.is-style-plain) cite,
        .wp-block-quote.is-large:not(.is-style-plain) footer,
        .wp-block-quote.is-style-large:not(.is-style-plain) cite,
        .wp-block-quote.is-style-large:not(.is-style-plain) footer {
            font-size: 1.125em;
            text-align: right
        }

        .wp-block-read-more {
            display: block;
            width: -moz-fit-content;
            width: fit-content
        }

        .wp-block-read-more:not([style*=text-decoration]),
        .wp-block-read-more:not([style*=text-decoration]):active,
        .wp-block-read-more:not([style*=text-decoration]):focus {
            text-decoration: none
        }

        ul.wp-block-rss {
            list-style: none;
            padding: 0
        }

        ul.wp-block-rss.wp-block-rss {
            box-sizing: border-box
        }

        ul.wp-block-rss.alignleft {
            margin-right: 2em
        }

        ul.wp-block-rss.alignright {
            margin-left: 2em
        }

        ul.wp-block-rss.is-grid {
            display: flex;
            flex-wrap: wrap;
            padding: 0;
            list-style: none
        }

        ul.wp-block-rss.is-grid li {
            margin: 0 1em 1em 0;
            width: 100%
        }

        @media (min-width:600px) {
            ul.wp-block-rss.columns-2 li {
                width: calc(50% - 1em)
            }

            ul.wp-block-rss.columns-3 li {
                width: calc(33.33333% - 1em)
            }

            ul.wp-block-rss.columns-4 li {
                width: calc(25% - 1em)
            }

            ul.wp-block-rss.columns-5 li {
                width: calc(20% - 1em)
            }

            ul.wp-block-rss.columns-6 li {
                width: calc(16.66667% - 1em)
            }
        }

        .wp-block-rss__item-author,
        .wp-block-rss__item-publish-date {
            display: block;
            font-size: .8125em
        }

        .wp-block-search__button {
            margin-left: .625em;
            word-break: normal
        }

        .wp-block-search__button.has-icon {
            line-height: 0
        }

        .wp-block-search__button svg {
            min-width: 1.5em;
            min-height: 1.5em;
            fill: currentColor;
            vertical-align: text-bottom
        }

        :where(.wp-block-search__button) {
            border: 1px solid #ccc;
            padding: .375em .625em
        }

        .wp-block-search__inside-wrapper {
            display: flex;
            flex: auto;
            flex-wrap: nowrap;
            max-width: 100%
        }

        .wp-block-search__label {
            width: 100%
        }

        .wp-block-search__input {
            padding: 8px;
            flex-grow: 1;
            margin-left: 0;
            margin-right: 0;
            min-width: 3em;
            border: 1px solid #949494;
            text-decoration: unset !important
        }

        .wp-block-search.wp-block-search__button-only .wp-block-search__button {
            margin-left: 0
        }

        :where(.wp-block-search__button-inside .wp-block-search__inside-wrapper) {
            padding: 4px;
            border: 1px solid #949494
        }

        :where(.wp-block-search__button-inside .wp-block-search__inside-wrapper) .wp-block-search__input {
            border-radius: 0;
            border: none;
            padding: 0 0 0 .25em
        }

        :where(.wp-block-search__button-inside .wp-block-search__inside-wrapper) .wp-block-search__input:focus {
            outline: none
        }

        :where(.wp-block-search__button-inside .wp-block-search__inside-wrapper) :where(.wp-block-search__button) {
            padding: .125em .5em
        }

        .wp-block-search.aligncenter .wp-block-search__inside-wrapper {
            margin: auto
        }

        .wp-block-separator {
            border: 1px solid;
            border-right: none;
            border-left: none
        }

        .wp-block-separator.is-style-dots {
            background: none !important;
            border: none;
            text-align: center;
            line-height: 1;
            height: auto
        }

        .wp-block-separator.is-style-dots:before {
            content: "···";
            color: currentColor;
            font-size: 1.5em;
            letter-spacing: 2em;
            padding-left: 2em;
            font-family: serif
        }

        .wp-block-site-logo {
            box-sizing: border-box;
            line-height: 0
        }

        .wp-block-site-logo a {
            display: inline-block
        }

        .wp-block-site-logo.is-default-size img {
            width: 120px;
            height: auto
        }

        .wp-block-site-logo img {
            height: auto;
            max-width: 100%
        }

        .wp-block-site-logo a,
        .wp-block-site-logo img {
            border-radius: inherit
        }

        .wp-block-site-logo.aligncenter {
            margin-left: auto;
            margin-right: auto;
            text-align: center
        }

        .wp-block-site-logo.is-style-rounded {
            border-radius: 9999px
        }

        .wp-block-social-links {
            box-sizing: border-box;
            padding-left: 0;
            padding-right: 0;
            text-indent: 0;
            margin-left: 0;
            background: none
        }

        .wp-block-social-links .wp-social-link a,
        .wp-block-social-links .wp-social-link a:hover {
            text-decoration: none;
            border-bottom: 0;
            box-shadow: none
        }

        .wp-block-social-links .wp-social-link a {
            padding: .25em
        }

        .wp-block-social-links .wp-social-link svg {
            width: 1em;
            height: 1em
        }

        .wp-block-social-links .wp-social-link span:not(.screen-reader-text) {
            margin-left: .5em;
            margin-right: .5em;
            font-size: .65em
        }

        .wp-block-social-links.has-small-icon-size {
            font-size: 16px
        }

        .wp-block-social-links,
        .wp-block-social-links.has-normal-icon-size {
            font-size: 24px
        }

        .wp-block-social-links.has-large-icon-size {
            font-size: 36px
        }

        .wp-block-social-links.has-huge-icon-size {
            font-size: 48px
        }

        .wp-block-social-links.aligncenter {
            justify-content: center;
            display: flex
        }

        .wp-block-social-links.alignright {
            justify-content: flex-end
        }

        .wp-block-social-link {
            display: block;
            border-radius: 9999px;
            transition: transform .1s ease;
            height: auto
        }

        @media (prefers-reduced-motion:reduce) {
            .wp-block-social-link {
                transition-duration: 0s;
                transition-delay: 0s
            }
        }

        .wp-block-social-link a {
            align-items: center;
            display: flex;
            line-height: 0;
            transition: transform .1s ease
        }

        .wp-block-social-link:hover {
            transform: scale(1.1)
        }

        .wp-block-social-links .wp-block-social-link .wp-block-social-link-anchor,
        .wp-block-social-links .wp-block-social-link .wp-block-social-link-anchor:active,
        .wp-block-social-links .wp-block-social-link .wp-block-social-link-anchor:hover,
        .wp-block-social-links .wp-block-social-link .wp-block-social-link-anchor:visited,
        .wp-block-social-links .wp-block-social-link .wp-block-social-link-anchor svg {
            color: currentColor;
            fill: currentColor
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link {
            background-color: #f0f0f0;
            color: #444
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-amazon {
            background-color: #f90;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-bandcamp {
            background-color: #1ea0c3;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-behance {
            background-color: #0757fe;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-codepen {
            background-color: #1e1f26;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-deviantart {
            background-color: #02e49b;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-dribbble {
            background-color: #e94c89;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-dropbox {
            background-color: #4280ff;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-etsy {
            background-color: #f45800;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-facebook {
            background-color: #1778f2;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-fivehundredpx {
            background-color: #000;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-flickr {
            background-color: #0461dd;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-foursquare {
            background-color: #e65678;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-github {
            background-color: #24292d;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-goodreads {
            background-color: #eceadd;
            color: #382110
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-google {
            background-color: #ea4434;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-instagram {
            background-color: #f00075;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-lastfm {
            background-color: #e21b24;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-linkedin {
            background-color: #0d66c2;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-mastodon {
            background-color: #3288d4;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-medium {
            background-color: #02ab6c;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-meetup {
            background-color: #f6405f;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-patreon {
            background-color: #ff424d;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-pinterest {
            background-color: #e60122;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-pocket {
            background-color: #ef4155;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-reddit {
            background-color: #ff4500;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-skype {
            background-color: #0478d7;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-snapchat {
            background-color: #fefc00;
            color: #fff;
            stroke: #000
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-soundcloud {
            background-color: #ff5600;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-spotify {
            background-color: #1bd760;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-telegram {
            background-color: #2aabee;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-tiktok {
            background-color: #000;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-tumblr {
            background-color: #011835;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-twitch {
            background-color: #6440a4;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-twitter {
            background-color: #1da1f2;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-vimeo {
            background-color: #1eb7ea;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-vk {
            background-color: #4680c2;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-wordpress {
            background-color: #3499cd;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-whatsapp {
            background-color: #25d366;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-yelp {
            background-color: #d32422;
            color: #fff
        }

        .wp-block-social-links:not(.is-style-logos-only) .wp-social-link-youtube {
            background-color: red;
            color: #fff
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link {
            background: none
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link a {
            padding: 0
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link svg {
            width: 1.25em;
            height: 1.25em
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-amazon {
            color: #f90
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-bandcamp {
            color: #1ea0c3
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-behance {
            color: #0757fe
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-codepen {
            color: #1e1f26
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-deviantart {
            color: #02e49b
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-dribbble {
            color: #e94c89
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-dropbox {
            color: #4280ff
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-etsy {
            color: #f45800
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-facebook {
            color: #1778f2
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-fivehundredpx {
            color: #000
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-flickr {
            color: #0461dd
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-foursquare {
            color: #e65678
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-github {
            color: #24292d
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-goodreads {
            color: #382110
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-google {
            color: #ea4434
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-instagram {
            color: #f00075
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-lastfm {
            color: #e21b24
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-linkedin {
            color: #0d66c2
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-mastodon {
            color: #3288d4
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-medium {
            color: #02ab6c
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-meetup {
            color: #f6405f
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-patreon {
            color: #ff424d
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-pinterest {
            color: #e60122
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-pocket {
            color: #ef4155
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-reddit {
            color: #ff4500
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-skype {
            color: #0478d7
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-snapchat {
            color: #fff;
            stroke: #000
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-soundcloud {
            color: #ff5600
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-spotify {
            color: #1bd760
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-telegram {
            color: #2aabee
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-tiktok {
            color: #000
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-tumblr {
            color: #011835
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-twitch {
            color: #6440a4
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-twitter {
            color: #1da1f2
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-vimeo {
            color: #1eb7ea
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-vk {
            color: #4680c2
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-whatsapp {
            color: #25d366
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-wordpress {
            color: #3499cd
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-yelp {
            color: #d32422
        }

        .wp-block-social-links.is-style-logos-only .wp-social-link-youtube {
            color: red
        }

        .wp-block-social-links.is-style-pill-shape .wp-social-link {
            width: auto
        }

        .wp-block-social-links.is-style-pill-shape .wp-social-link a {
            padding-left: .66667em;
            padding-right: .66667em
        }

        .wp-block-spacer {
            clear: both
        }

        .wp-block-tag-cloud.aligncenter {
            text-align: center;
            justify-content: center
        }

        .wp-block-tag-cloud.alignfull {
            padding-left: 1em;
            padding-right: 1em
        }

        .wp-block-tag-cloud a {
            display: inline-block;
            margin-right: 5px
        }

        .wp-block-tag-cloud span {
            display: inline-block;
            margin-left: 5px;
            text-decoration: none
        }

        .wp-block-tag-cloud.is-style-outline {
            display: flex;
            flex-wrap: wrap;
            gap: 1ch
        }

        .wp-block-tag-cloud.is-style-outline a {
            border: 1px solid;
            font-size: unset !important;
            margin-right: 0;
            padding: 1ch 2ch;
            text-decoration: none !important
        }

        .wp-block-table {
            overflow-x: auto
        }

        .wp-block-table table {
            border-collapse: collapse;
            width: 100%
        }

        .wp-block-table td,
        .wp-block-table th {
            border: 1px solid;
            padding: .5em
        }

        .wp-block-table .has-fixed-layout {
            table-layout: fixed;
            width: 100%
        }

        .wp-block-table .has-fixed-layout td,
        .wp-block-table .has-fixed-layout th {
            word-break: break-word
        }

        .wp-block-table.aligncenter,
        .wp-block-table.alignleft,
        .wp-block-table.alignright {
            display: table;
            width: auto
        }

        .wp-block-table.aligncenter td,
        .wp-block-table.aligncenter th,
        .wp-block-table.alignleft td,
        .wp-block-table.alignleft th,
        .wp-block-table.alignright td,
        .wp-block-table.alignright th {
            word-break: break-word
        }

        .wp-block-table .has-subtle-light-gray-background-color {
            background-color: #f3f4f5
        }

        .wp-block-table .has-subtle-pale-green-background-color {
            background-color: #e9fbe5
        }

        .wp-block-table .has-subtle-pale-blue-background-color {
            background-color: #e7f5fe
        }

        .wp-block-table .has-subtle-pale-pink-background-color {
            background-color: #fcf0ef
        }

        .wp-block-table.is-style-stripes {
            border-spacing: 0;
            border-collapse: inherit;
            background-color: transparent;
            border-bottom: 1px solid #f0f0f0
        }

        .wp-block-table.is-style-stripes tbody tr:nth-child(odd) {
            background-color: #f0f0f0
        }

        .wp-block-table.is-style-stripes.has-subtle-light-gray-background-color tbody tr:nth-child(odd) {
            background-color: #f3f4f5
        }

        .wp-block-table.is-style-stripes.has-subtle-pale-green-background-color tbody tr:nth-child(odd) {
            background-color: #e9fbe5
        }

        .wp-block-table.is-style-stripes.has-subtle-pale-blue-background-color tbody tr:nth-child(odd) {
            background-color: #e7f5fe
        }

        .wp-block-table.is-style-stripes.has-subtle-pale-pink-background-color tbody tr:nth-child(odd) {
            background-color: #fcf0ef
        }

        .wp-block-table.is-style-stripes td,
        .wp-block-table.is-style-stripes th {
            border-color: transparent
        }

        .wp-block-table .has-border-color>*,
        .wp-block-table .has-border-color td,
        .wp-block-table .has-border-color th,
        .wp-block-table .has-border-color tr {
            border-color: inherit
        }

        .wp-block-table table[style*=border-top-color]>*,
        .wp-block-table table[style*=border-top-color]>* td,
        .wp-block-table table[style*=border-top-color]>* th,
        .wp-block-table table[style*=border-top-color] tr:first-child,
        .wp-block-table table[style*=border-top-color] tr:first-child td,
        .wp-block-table table[style*=border-top-color] tr:first-child th {
            border-top-color: inherit
        }

        .wp-block-table table[style*=border-top-color] tr:not(:first-child) {
            border-top-color: currentColor
        }

        .wp-block-table table[style*=border-right-color]>*,
        .wp-block-table table[style*=border-right-color] td:last-child,
        .wp-block-table table[style*=border-right-color] th,
        .wp-block-table table[style*=border-right-color] tr {
            border-right-color: inherit
        }

        .wp-block-table table[style*=border-bottom-color]>*,
        .wp-block-table table[style*=border-bottom-color]>* td,
        .wp-block-table table[style*=border-bottom-color]>* th,
        .wp-block-table table[style*=border-bottom-color] tr:last-child,
        .wp-block-table table[style*=border-bottom-color] tr:last-child td,
        .wp-block-table table[style*=border-bottom-color] tr:last-child th {
            border-bottom-color: inherit
        }

        .wp-block-table table[style*=border-bottom-color] tr:not(:last-child) {
            border-bottom-color: currentColor
        }

        .wp-block-table table[style*=border-left-color]>*,
        .wp-block-table table[style*=border-left-color] td:first-child,
        .wp-block-table table[style*=border-left-color] th,
        .wp-block-table table[style*=border-left-color] tr {
            border-left-color: inherit
        }

        .wp-block-table table[style*=border-style]>*,
        .wp-block-table table[style*=border-style] td,
        .wp-block-table table[style*=border-style] th,
        .wp-block-table table[style*=border-style] tr {
            border-style: inherit
        }

        .wp-block-table table[style*=border-width]>*,
        .wp-block-table table[style*=border-width] td,
        .wp-block-table table[style*=border-width] th,
        .wp-block-table table[style*=border-width] tr {
            border-width: inherit;
            border-style: inherit
        }

        .wp-block-text-columns,
        .wp-block-text-columns.aligncenter {
            display: flex
        }

        .wp-block-text-columns .wp-block-column {
            margin: 0 1em;
            padding: 0
        }

        .wp-block-text-columns .wp-block-column:first-child {
            margin-left: 0
        }

        .wp-block-text-columns .wp-block-column:last-child {
            margin-right: 0
        }

        .wp-block-text-columns.columns-2 .wp-block-column {
            width: 50%
        }

        .wp-block-text-columns.columns-3 .wp-block-column {
            width: 33.33333%
        }

        .wp-block-text-columns.columns-4 .wp-block-column {
            width: 25%
        }

        pre.wp-block-verse {
            font-family: inherit;
            overflow: auto;
            white-space: pre-wrap
        }

        .wp-block-video {
            box-sizing: border-box
        }

        .wp-block-video video {
            width: 100%
        }

        @supports (position:sticky) {
            .wp-block-video [poster] {
                object-fit: cover
            }
        }

        .wp-block-video.aligncenter {
            text-align: center
        }

        .wp-block-video figcaption {
            margin-top: .5em;
            margin-bottom: 1em
        }

        .wp-element-button {
            cursor: pointer
        }

        :root {
            --wp--preset--font-size--normal: 16px;
            --wp--preset--font-size--huge: 42px
        }

        :root .has-very-light-gray-background-color {
            background-color: #eee
        }

        :root .has-very-dark-gray-background-color {
            background-color: #313131
        }

        :root .has-very-light-gray-color {
            color: #eee
        }

        :root .has-very-dark-gray-color {
            color: #313131
        }

        :root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background {
            background: linear-gradient(135deg, #00d084, #0693e3)
        }

        :root .has-purple-crush-gradient-background {
            background: linear-gradient(135deg, #34e2e4, #4721fb 50%, #ab1dfe)
        }

        :root .has-hazy-dawn-gradient-background {
            background: linear-gradient(135deg, #faaca8, #dad0ec)
        }

        :root .has-subdued-olive-gradient-background {
            background: linear-gradient(135deg, #fafae1, #67a671)
        }

        :root .has-atomic-cream-gradient-background {
            background: linear-gradient(135deg, #fdd79a, #004a59)
        }

        :root .has-nightshade-gradient-background {
            background: linear-gradient(135deg, #330968, #31cdcf)
        }

        :root .has-midnight-gradient-background {
            background: linear-gradient(135deg, #020381, #2874fc)
        }

        .has-regular-font-size {
            font-size: 1em
        }

        .has-larger-font-size {
            font-size: 2.625em
        }

        .has-normal-font-size {
            font-size: var(--wp--preset--font-size--normal)
        }

        .has-huge-font-size {
            font-size: var(--wp--preset--font-size--huge)
        }

        .has-text-align-center {
            text-align: center
        }

        .has-text-align-left {
            text-align: left
        }

        .has-text-align-right {
            text-align: right
        }

        #end-resizable-editor-section {
            display: none
        }

        .aligncenter {
            clear: both
        }

        .items-justified-left {
            justify-content: flex-start
        }

        .items-justified-center {
            justify-content: center
        }

        .items-justified-right {
            justify-content: flex-end
        }

        .items-justified-space-between {
            justify-content: space-between
        }

        .screen-reader-text {
            border: 0;
            clip: rect(1px, 1px, 1px, 1px);
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
            word-wrap: normal !important
        }

        .screen-reader-text:focus {
            background-color: #ddd;
            clip: auto !important;
            clip-path: none;
            color: #444;
            display: block;
            font-size: 1em;
            height: auto;
            left: 5px;
            line-height: normal;
            padding: 15px 23px 14px;
            text-decoration: none;
            top: 5px;
            width: auto;
            z-index: 100000
        }

        html :where(.has-border-color) {
            border-style: solid
        }

        html :where([style*=border-top-color]) {
            border-top-style: solid
        }

        html :where([style*=border-right-color]) {
            border-right-style: solid
        }

        html :where([style*=border-bottom-color]) {
            border-bottom-style: solid
        }

        html :where([style*=border-left-color]) {
            border-left-style: solid
        }

        html :where([style*=border-width]) {
            border-style: solid
        }

        html :where([style*=border-top-width]) {
            border-top-style: solid
        }

        html :where([style*=border-right-width]) {
            border-right-style: solid
        }

        html :where([style*=border-bottom-width]) {
            border-bottom-style: solid
        }

        html :where([style*=border-left-width]) {
            border-left-style: solid
        }

        html :where(img[class*=wp-image-]) {
            height: auto;
            max-width: 100%
        }

        figure {
            margin: 0 0 1em
        }

        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wpcf7 .screen-reader-response {
            position: absolute;
            overflow: hidden;
            clip: rect(1px, 1px, 1px, 1px);
            clip-path: inset(50%);
            height: 1px;
            width: 1px;
            margin: -1px;
            padding: 0;
            border: 0;
            word-wrap: normal !important
        }

        .wpcf7 form .wpcf7-response-output {
            margin: 2em .5em 1em;
            padding: .2em 1em;
            border: 2px solid #00a0d2
        }

        .wpcf7 form.init .wpcf7-response-output,
        .wpcf7 form.resetting .wpcf7-response-output,
        .wpcf7 form.submitting .wpcf7-response-output {
            display: none
        }

        .wpcf7 form.sent .wpcf7-response-output {
            border-color: #46b450
        }

        .wpcf7 form.failed .wpcf7-response-output,
        .wpcf7 form.aborted .wpcf7-response-output {
            border-color: #dc3232
        }

        .wpcf7 form.spam .wpcf7-response-output {
            border-color: #f56e28
        }

        .wpcf7 form.invalid .wpcf7-response-output,
        .wpcf7 form.unaccepted .wpcf7-response-output,
        .wpcf7 form.payment-required .wpcf7-response-output {
            border-color: #ffb900
        }

        .wpcf7-form-control-wrap {
            position: relative
        }

        .wpcf7-not-valid-tip {
            color: #dc3232;
            font-size: 1em;
            font-weight: 400;
            display: block
        }

        .use-floating-validation-tip .wpcf7-not-valid-tip {
            position: relative;
            top: -2ex;
            left: 1em;
            z-index: 100;
            border: 1px solid #dc3232;
            background: #fff;
            padding: .2em .8em;
            width: 24em
        }

        .wpcf7-list-item {
            display: inline-block;
            margin: 0 0 0 1em
        }

        .wpcf7-list-item-label:before,
        .wpcf7-list-item-label:after {
            content: " "
        }

        .wpcf7-spinner {
            visibility: hidden;
            display: inline-block;
            background-color: #23282d;
            opacity: .75;
            width: 24px;
            height: 24px;
            border: none;
            border-radius: 100%;
            padding: 0;
            margin: 0 24px;
            position: relative
        }

        form.submitting .wpcf7-spinner {
            visibility: visible
        }

        .wpcf7-spinner:before {
            content: '';
            position: absolute;
            background-color: #fbfbfc;
            top: 4px;
            left: 4px;
            width: 6px;
            height: 6px;
            border: none;
            border-radius: 100%;
            transform-origin: 8px 8px;
            animation-name: spin;
            animation-duration: 1s;
            animation-timing-function: linear;
            animation-iteration-count: infinite
        }

        @media (prefers-reduced-motion:reduce) {
            .wpcf7-spinner:before {
                animation-name: blink;
                animation-duration: 2s
            }
        }

        @keyframes spin {
            from {
                transform: rotate(0deg)
            }

            to {
                transform: rotate(360deg)
            }
        }

        @keyframes blink {
            from {
                opacity: 0
            }

            50% {
                opacity: 1
            }

            to {
                opacity: 0
            }
        }

        .wpcf7 input[type=file] {
            cursor: pointer
        }

        .wpcf7 input[type=file]:disabled {
            cursor: default
        }

        .wpcf7 .wpcf7-submit:disabled {
            cursor: not-allowed
        }

        .wpcf7 input[type=url],
        .wpcf7 input[type=email],
        .wpcf7 input[type=tel] {
            direction: ltr
        }

        #cookie-law-info-bar {
            font-size: 15px;
            margin: 0 auto;
            padding: 12px 10px;
            position: absolute;
            text-align: center;
            box-sizing: border-box;
            width: 100%;
            z-index: 9999;
            display: none;
            left: 0;
            font-weight: 300;
            box-shadow: 0 -1px 10px 0 rgba(172, 171, 171, .3)
        }

        #cookie-law-info-again {
            font-size: 10pt;
            margin: 0;
            padding: 5px 10px;
            text-align: center;
            z-index: 9999;
            cursor: pointer;
            box-shadow: #161616 2px 2px 5px 2px
        }

        #cookie-law-info-bar span {
            vertical-align: middle
        }

        .cli-plugin-button,
        .cli-plugin-button:visited {
            display: inline-block;
            padding: 9px 12px;
            color: #fff;
            text-decoration: none;
            position: relative;
            cursor: pointer;
            margin-left: 5px;
            text-decoration: none
        }

        .cli-plugin-main-link {
            margin-left: 0;
            font-weight: 550;
            text-decoration: underline
        }

        .cli-plugin-button:hover {
            background-color: #111;
            color: #fff;
            text-decoration: none
        }

        .small.cli-plugin-button,
        .small.cli-plugin-button:visited {
            font-size: 11px
        }

        .cli-plugin-button,
        .cli-plugin-button:visited,
        .medium.cli-plugin-button,
        .medium.cli-plugin-button:visited {
            font-size: 13px;
            font-weight: 400;
            line-height: 1
        }

        .large.cli-plugin-button,
        .large.cli-plugin-button:visited {
            font-size: 14px;
            padding: 8px 14px 9px
        }

        .super.cli-plugin-button,
        .super.cli-plugin-button:visited {
            font-size: 34px;
            padding: 8px 14px 9px
        }

        .pink.cli-plugin-button,
        .magenta.cli-plugin-button:visited {
            background-color: #e22092
        }

        .pink.cli-plugin-button:hover {
            background-color: #c81e82
        }

        .green.cli-plugin-button,
        .green.cli-plugin-button:visited {
            background-color: #91bd09
        }

        .green.cli-plugin-button:hover {
            background-color: #749a02
        }

        .red.cli-plugin-button,
        .red.cli-plugin-button:visited {
            background-color: #e62727
        }

        .red.cli-plugin-button:hover {
            background-color: #cf2525
        }

        .orange.cli-plugin-button,
        .orange.cli-plugin-button:visited {
            background-color: #ff5c00
        }

        .orange.cli-plugin-button:hover {
            background-color: #d45500
        }

        .blue.cli-plugin-button,
        .blue.cli-plugin-button:visited {
            background-color: #2981e4
        }

        .blue.cli-plugin-button:hover {
            background-color: #2575cf
        }

        .yellow.cli-plugin-button,
        .yellow.cli-plugin-button:visited {
            background-color: #ffb515
        }

        .yellow.cli-plugin-button:hover {
            background-color: #fc9200
        }

        .cli-plugin-button {
            margin-top: 5px
        }

        .cli-bar-popup {
            -moz-background-clip: padding;
            -webkit-background-clip: padding;
            background-clip: padding-box;
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            border-radius: 30px;
            padding: 20px
        }

        .cli-powered_by_p {
            width: 100% !important;
            display: block !important;
            color: #333;
            clear: both;
            font-style: italic !important;
            font-size: 12px !important;
            margin-top: 15px !important
        }

        .cli-powered_by_a {
            color: #333;
            font-weight: 600 !important;
            font-size: 12px !important
        }

        .cli-plugin-main-link.cli-plugin-button {
            text-decoration: none
        }

        .cli-plugin-main-link.cli-plugin-button {
            margin-left: 5px
        }

        .gdpr-container-fluid {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto
        }

        .gdpr-row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px
        }

        .gdpr-col-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%
        }

        .gdpr-col-8 {
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%
        }

        .gdpr-align-items-stretch {
            -ms-flex-align: stretch !important;
            align-items: stretch !important
        }

        .gdpr-d-flex {
            display: -ms-flexbox !important;
            display: flex !important
        }

        .gdpr-px-0 {
            padding-left: 0;
            padding-right: 0
        }

        .modal-backdrop.show {
            opacity: .8
        }

        .modal-open {
            overflow: hidden
        }

        .modal-open .gdpr-modal {
            overflow-x: hidden;
            overflow-y: auto
        }

        .gdpr-modal.fade .gdpr-modal-dialog {
            transition: -webkit-transform .3s ease-out;
            transition: transform .3s ease-out;
            transition: transform .3s ease-out, -webkit-transform .3s ease-out;
            -webkit-transform: translate(0, -25%);
            transform: translate(0, -25%)
        }

        .gdpr-modal.show .gdpr-modal-dialog {
            -webkit-transform: translate(0, 0);
            transform: translate(0, 0)
        }

        .modal-backdrop {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1039;
            background-color: #000
        }

        .modal-backdrop.fade {
            opacity: 0
        }

        .modal-backdrop.show {
            opacity: .5
        }

        .gdpr-modal {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1050;
            display: none;
            overflow: hidden;
            outline: 0
        }

        .gdpr-modal a {
            text-decoration: none
        }

        .gdpr-modal .gdpr-modal-dialog {
            position: relative;
            width: auto;
            margin: .5rem;
            pointer-events: none;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            min-height: calc(100% - (.5rem*2))
        }

        @media (min-width:576px) {
            .gdpr-modal .gdpr-modal-dialog {
                max-width: 500px;
                margin: 1.75rem auto;
                min-height: calc(100% - (1.75rem*2))
            }
        }

        @media (min-width:992px) {
            .gdpr-modal .gdpr-modal-dialog {
                max-width: 900px
            }
        }

        .gdpr-modal-content {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            pointer-events: auto;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: .3rem;
            outline: 0
        }

        .gdpr-modal .row {
            margin: 0 -15px
        }

        .gdpr-modal .modal-body {
            padding: 0;
            position: relative;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto
        }

        .gdpr-modal .close {
            position: absolute;
            right: 10px;
            top: 10px;
            z-index: 1;
            padding: 0;
            background-color: transparent;
            border: 0;
            -webkit-appearance: none;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1;
            color: #000;
            text-shadow: 0 1px 0 #fff
        }

        .gdpr-modal .close:focus {
            outline: 0
        }

        .gdpr-switch {
            display: inline-block;
            position: relative;
            min-height: 1px;
            padding-left: 70px;
            font-size: 14px
        }

        .gdpr-switch input[type=checkbox] {
            display: none
        }

        .gdpr-switch .gdpr-slider {
            background-color: #e3e1e8;
            height: 24px;
            width: 50px;
            bottom: 0;
            cursor: pointer;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            transition: .4s
        }

        .gdpr-switch .gdpr-slider:before {
            background-color: #fff;
            bottom: 2px;
            content: "";
            height: 20px;
            left: 2px;
            position: absolute;
            transition: .4s;
            width: 20px
        }

        .gdpr-switch input:checked+.gdpr-slider {
            background-color: #63b35f
        }

        .gdpr-switch input:checked+.gdpr-slider:before {
            transform: translateX(26px)
        }

        .gdpr-switch .gdpr-slider {
            border-radius: 34px
        }

        .gdpr-switch .gdpr-slider:before {
            border-radius: 50%
        }

        .gdpr-tab-content>.gdpr-tab-pane {
            display: none
        }

        .gdpr-tab-content>.active {
            display: block
        }

        .gdpr-fade {
            transition: opacity .15s linear
        }

        .gdpr-nav-pills {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
            -ms-flex-direction: column !important;
            flex-direction: column !important;
            align-items: stretch !important;
            -ms-align-items: stretch !important
        }

        .nav.gdpr-nav-pills,
        .gdpr-tab-content {
            width: 100%;
            padding: 30px
        }

        .nav.gdpr-nav-pills {
            background: #f3f3f3
        }

        .nav.gdpr-nav-pills .gdpr-nav-link {
            border: 1px solid #0070ad;
            margin-bottom: 10px;
            color: #0070ad;
            font-size: 14px;
            display: block;
            padding: .5rem 1rem;
            border-radius: .25rem
        }

        .nav.gdpr-nav-pills .gdpr-nav-link.active,
        .nav.gdpr-nav-pills .show>.gdpr-nav-link {
            background-color: #0070ad;
            border: 1px solid #0070ad
        }

        .nav.gdpr-nav-pills .gdpr-nav-link.active {
            color: #fff
        }

        .gdpr-tab-content .gdpr-button-wrapper {
            padding-top: 30px;
            margin-top: 30px;
            border-top: 1px solid #d6d6d6
        }

        .gdpr-tab-content .gdpr-button-wrapper .btn-gdpr {
            background-color: #0070ad;
            border-color: #0070ad;
            color: #fff;
            font-size: 14px;
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        .gdpr-tab-content p {
            color: #343438;
            font-size: 14px;
            margin-top: 0
        }

        .gdpr-tab-content h4 {
            font-size: 20px;
            margin-bottom: .5rem;
            margin-top: 0;
            font-family: inherit;
            font-weight: 500;
            line-height: 1.2;
            color: inherit
        }

        .cli-container-fluid {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto
        }

        .cli-row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px
        }

        .cli-col-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%
        }

        .cli-col-8 {
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%
        }

        .cli-align-items-stretch {
            -ms-flex-align: stretch !important;
            align-items: stretch !important
        }

        .cli-d-flex {
            display: -ms-flexbox !important;
            display: flex !important
        }

        .cli-px-0 {
            padding-left: 0;
            padding-right: 0
        }

        .cli-btn {
            cursor: pointer;
            font-size: 14px;
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .5rem 1.25rem;
            line-height: 1;
            border-radius: .25rem;
            transition: all .15s ease-in-out
        }

        .cli-btn:hover {
            opacity: .8
        }

        .cli-read-more-link {
            cursor: pointer;
            font-size: 15px;
            font-weight: 500;
            text-decoration: underline
        }

        .cli-btn:focus {
            outline: 0
        }

        .cli-modal-backdrop.cli-show {
            opacity: .8
        }

        .cli-modal-open {
            overflow: hidden
        }

        .cli-barmodal-open {
            overflow: hidden
        }

        .cli-modal-open .cli-modal {
            overflow-x: hidden;
            overflow-y: auto
        }

        .cli-modal.cli-fade .cli-modal-dialog {
            transition: -webkit-transform .3s ease-out;
            transition: transform .3s ease-out;
            transition: transform .3s ease-out, -webkit-transform .3s ease-out;
            -webkit-transform: translate(0, -25%);
            transform: translate(0, -25%)
        }

        .cli-modal.cli-show .cli-modal-dialog {
            -webkit-transform: translate(0, 0);
            transform: translate(0, 0)
        }

        .cli-modal-backdrop {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1040;
            background-color: #000;
            display: none
        }

        .cli-modal-backdrop.cli-fade {
            opacity: 0
        }

        .cli-modal-backdrop.cli-show {
            opacity: .5;
            display: block
        }

        .cli-modal.cli-show {
            display: block
        }

        .cli-modal a {
            text-decoration: none
        }

        .cli-modal .cli-modal-dialog {
            position: relative;
            width: auto;
            margin: .5rem;
            pointer-events: none;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            min-height: calc(100% - (.5rem*2))
        }

        @media (min-width:576px) {
            .cli-modal .cli-modal-dialog {
                max-width: 500px;
                margin: 1.75rem auto;
                min-height: calc(100% - (1.75rem*2))
            }
        }

        @media (min-width:992px) {
            .cli-modal .cli-modal-dialog {
                max-width: 900px
            }
        }

        .cli-modal-content {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            pointer-events: auto;
            background-color: #fff;
            background-clip: padding-box;
            border-radius: .3rem;
            outline: 0
        }

        .cli-modal .row {
            margin: 0 -15px
        }

        .cli-modal .modal-body {
            padding: 0;
            position: relative;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto
        }

        .cli-modal .cli-modal-close {
            position: absolute;
            right: 10px;
            top: 10px;
            z-index: 1;
            padding: 0;
            background-color: transparent !important;
            border: 0;
            -webkit-appearance: none;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1;
            color: #000;
            text-shadow: 0 1px 0 #fff
        }

        .cli-modal .cli-modal-close:focus {
            outline: 0
        }

        .cli-switch {
            display: inline-block;
            position: relative;
            min-height: 1px;
            padding-left: 70px;
            font-size: 14px
        }

        .cli-switch input[type=checkbox] {
            display: none
        }

        .cli-switch .cli-slider {
            background-color: #e3e1e8;
            height: 24px;
            width: 50px;
            bottom: 0;
            cursor: pointer;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            transition: .4s
        }

        .cli-switch .cli-slider:before {
            background-color: #fff;
            bottom: 2px;
            content: "";
            height: 20px;
            left: 2px;
            position: absolute;
            transition: .4s;
            width: 20px
        }

        .cli-switch input:checked+.cli-slider {
            background-color: #00acad
        }

        .cli-switch input:checked+.cli-slider:before {
            transform: translateX(26px)
        }

        .cli-switch .cli-slider {
            border-radius: 34px
        }

        .cli-switch .cli-slider:before {
            border-radius: 50%
        }

        .cli-tab-content {
            background: #fff
        }

        .cli-tab-content>.cli-active {
            display: block
        }

        .cli-fade {
            transition: opacity .15s linear
        }

        .cli-nav-pills {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .cli-nav-pills,
        .cli-tab-content {
            width: 100%;
            padding: 30px
        }

        @media (max-width:767px) {

            .cli-nav-pills,
            .cli-tab-content {
                padding: 30px 10px
            }
        }

        .cli-nav-pills {
            background: #f3f3f3
        }

        .cli-nav-pills .cli-nav-link {
            border: 1px solid #00acad;
            margin-bottom: 10px;
            color: #00acad;
            font-size: 14px;
            display: block;
            padding: .5rem 1rem;
            border-radius: .25rem;
            cursor: pointer
        }

        .cli-nav-pills .cli-nav-link.cli-active,
        .cli-nav-pills .cli-show>.cli-nav-link {
            background-color: #00acad;
            border: 1px solid #00acad
        }

        .cli-nav-pills .cli-nav-link.cli-active {
            color: #fff
        }

        .cli-tab-content .cli-button-wrapper {
            padding-top: 30px;
            margin-top: 30px;
            border-top: 1px solid #d6d6d6
        }

        .cli-tab-content p {
            color: #343438;
            font-size: 14px;
            margin-top: 0
        }

        .cli-tab-content h4 {
            font-size: 20px;
            margin-bottom: 1.5rem;
            margin-top: 0;
            font-family: inherit;
            font-weight: 500;
            line-height: 1.2;
            color: inherit
        }

        .cli-container-fluid {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto
        }

        .cli-row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px
        }

        .cli-col-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%
        }

        .cli-col-8 {
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%;
            flex-direction: column
        }

        .cli-align-items-stretch {
            -ms-flex-align: stretch !important;
            align-items: stretch !important
        }

        .cli-d-flex {
            display: -ms-flexbox !important;
            display: flex !important
        }

        .cli-px-0 {
            padding-left: 0;
            padding-right: 0
        }

        .cli-btn {
            cursor: pointer;
            font-size: 14px;
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .5rem 1.25rem;
            line-height: 1;
            border-radius: .25rem;
            transition: all .15s ease-in-out
        }

        .cli-btn:hover {
            opacity: .8
        }

        .cli-read-more-link {
            cursor: pointer;
            font-size: 15px;
            font-weight: 500;
            text-decoration: underline
        }

        .cli-btn:focus {
            outline: 0
        }

        .cli-modal-backdrop.cli-show {
            opacity: .8
        }

        .cli-modal-open {
            overflow: hidden
        }

        .cli-barmodal-open {
            overflow: hidden
        }

        .cli-modal-open .cli-modal {
            overflow-x: hidden;
            overflow-y: auto
        }

        .cli-modal.cli-fade .cli-modal-dialog {
            transition: -webkit-transform .3s ease-out;
            transition: transform .3s ease-out;
            transition: transform .3s ease-out, -webkit-transform .3s ease-out;
            -webkit-transform: translate(0, -25%);
            transform: translate(0, -25%)
        }

        .cli-modal.cli-show .cli-modal-dialog {
            -webkit-transform: translate(0, 0);
            transform: translate(0, 0)
        }

        .cli-modal-backdrop {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1040;
            background-color: #000;
            -webkit-transform: scale(0);
            transform: scale(0);
            transition: opacity ease-in-out .5s
        }

        .cli-modal-backdrop.cli-fade {
            opacity: 0
        }

        .cli-modal-backdrop.cli-show {
            opacity: .5;
            -webkit-transform: scale(1);
            transform: scale(1)
        }

        .cli-modal {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 99999;
            transform: scale(0);
            overflow: hidden;
            outline: 0;
            display: none
        }

        .cli-modal a {
            text-decoration: none
        }

        .cli-modal .cli-modal-dialog {
            position: relative;
            width: auto;
            margin: .5rem;
            pointer-events: none;
            font-family: inherit;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            min-height: calc(100% - (.5rem*2))
        }

        @media (min-width:576px) {
            .cli-modal .cli-modal-dialog {
                max-width: 500px;
                margin: 1.75rem auto;
                min-height: calc(100% - (1.75rem*2))
            }
        }

        .cli-modal-content {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            pointer-events: auto;
            background-color: #fff;
            background-clip: padding-box;
            border-radius: .2rem;
            box-sizing: border-box;
            outline: 0
        }

        .cli-modal .row {
            margin: 0 -15px
        }

        .cli-modal .modal-body {
            padding: 0;
            position: relative;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto
        }

        .cli-modal .cli-modal-close:focus {
            outline: 0
        }

        .cli-switch {
            display: inline-block;
            position: relative;
            min-height: 1px;
            padding-left: 38px;
            font-size: 14px
        }

        .cli-switch input[type=checkbox] {
            display: none
        }

        .cli-switch .cli-slider {
            background-color: #e3e1e8;
            height: 20px;
            width: 38px;
            bottom: 0;
            cursor: pointer;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            transition: .4s
        }

        .cli-switch .cli-slider:before {
            background-color: #fff;
            bottom: 2px;
            content: "";
            height: 15px;
            left: 3px;
            position: absolute;
            transition: .4s;
            width: 15px
        }

        .cli-switch input:checked+.cli-slider {
            background-color: #61a229
        }

        .cli-switch input:checked+.cli-slider:before {
            transform: translateX(18px)
        }

        .cli-switch .cli-slider {
            border-radius: 34px;
            font-size: 0
        }

        .cli-switch .cli-slider:before {
            border-radius: 50%
        }

        .cli-tab-content {
            background: #fff
        }

        .cli-nav-pills {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .cli-nav-pills,
        .cli-tab-content {
            width: 100%;
            padding: 5px 30px 5px 5px;
            box-sizing: border-box
        }

        @media (max-width:767px) {

            .cli-nav-pills,
            .cli-tab-content {
                padding: 30px 10px
            }
        }

        .cli-nav-pills {
            background: #fff
        }

        .cli-nav-pills .cli-nav-link {
            border: 1px solid #ccc;
            margin-bottom: 10px;
            color: #2a2a2a;
            font-size: 14px;
            display: block;
            padding: .5rem 1rem;
            border-radius: .25rem;
            cursor: pointer
        }

        .cli-nav-pills .cli-nav-link.cli-active,
        .cli-nav-pills .cli-show>.cli-nav-link {
            background-color: #f6f6f9;
            border: 1px solid #ccc
        }

        .cli-nav-pills .cli-nav-link.cli-active {
            color: #2a2a2a
        }

        .cli-tab-content .cli-button-wrapper {
            padding-top: 30px;
            margin-top: 30px;
            border-top: 1px solid #d6d6d6
        }

        .cli-tab-content p {
            color: #343438;
            font-size: 14px;
            margin-top: 0
        }

        .cli-tab-content h4 {
            font-size: 20px;
            margin-bottom: 1.5rem;
            margin-top: 0;
            font-family: inherit;
            font-weight: 500;
            line-height: 1.2;
            color: inherit
        }

        #cookie-law-info-bar .cli-nav-pills,
        #cookie-law-info-bar .cli-tab-content,
        #cookie-law-info-bar .cli-nav-pills .cli-show>.cli-nav-link,
        #cookie-law-info-bar a.cli-nav-link.cli-active {
            background: 0 0
        }

        #cookie-law-info-bar .cli-nav-pills .cli-nav-link.cli-active,
        #cookie-law-info-bar .cli-nav-link,
        #cookie-law-info-bar .cli-tab-container p,
        #cookie-law-info-bar span.cli-necessary-caption,
        #cookie-law-info-bar .cli-switch .cli-slider:after {
            color: inherit
        }

        #cookie-law-info-bar .cli-tab-header a:before {
            border-right: 1px solid currentColor;
            border-bottom: 1px solid currentColor
        }

        #cookie-law-info-bar .cli-row {
            margin-top: 20px
        }

        #cookie-law-info-bar .cli-col-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: none
        }

        #cookie-law-info-bar .cli-col-8 {
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%
        }

        .cli-wrapper {
            max-width: 90%;
            float: none;
            margin: 0 auto
        }

        #cookie-law-info-bar .cli-tab-content h4 {
            margin-bottom: .5rem
        }

        #cookie-law-info-bar .cli-nav-pills .cli-nav-link {
            padding: .2rem .5rem
        }

        #cookie-law-info-bar .cli-tab-container {
            display: none;
            text-align: left
        }

        .cli-tab-footer .cli-btn {
            background-color: #00acad;
            padding: 10px 15px;
            text-decoration: none
        }

        .cli-tab-footer .wt-cli-privacy-accept-btn {
            background-color: #61a229;
            color: #fff;
            border-radius: 0
        }

        .cli-tab-footer {
            width: 100%;
            text-align: right;
            padding: 20px 0
        }

        .cli-col-12 {
            width: 100%
        }

        .cli-tab-header {
            display: flex;
            justify-content: space-between
        }

        .cli-tab-header a:before {
            width: 10px;
            height: 2px;
            left: 0;
            top: calc(50% - 1px)
        }

        .cli-tab-header a:after {
            width: 2px;
            height: 10px;
            left: 4px;
            top: calc(50% - 5px);
            -webkit-transform: none;
            transform: none
        }

        .cli-tab-header a:before {
            width: 7px;
            height: 7px;
            border-right: 1px solid #4a6e78;
            border-bottom: 1px solid #4a6e78;
            content: " ";
            transform: rotate(-45deg);
            -webkit-transition: all .2s ease-in-out;
            -moz-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
            margin-right: 10px
        }

        .cli-tab-header a.cli-nav-link {
            position: relative;
            display: flex;
            align-items: center;
            font-size: 14px;
            color: #000;
            text-transform: capitalize
        }

        .cli-tab-header.cli-tab-active .cli-nav-link:before {
            transform: rotate(45deg);
            -webkit-transition: all .2s ease-in-out;
            -moz-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out
        }

        .cli-tab-header {
            border-radius: 5px;
            padding: 12px 15px;
            cursor: pointer;
            transition: background-color .2s ease-out .3s, color .2s ease-out 0s;
            background-color: #f2f2f2
        }

        .cli-modal .cli-modal-close {
            position: absolute;
            right: 0;
            top: 0;
            z-index: 1;
            -webkit-appearance: none;
            width: 40px;
            height: 40px;
            padding: 0;
            border-radius: 50%;
            padding: 10px;
            background: 0 0;
            border: none;
            min-width: 40px
        }

        .cli-tab-container h4,
        .cli-tab-container h1 {
            font-family: inherit;
            font-size: 16px;
            margin-bottom: 15px;
            margin: 10px 0
        }

        #cliSettingsPopup .cli-tab-section-container {
            padding-top: 12px
        }

        .cli-tab-container p,
        .cli-privacy-content-text {
            font-size: 14px;
            line-height: 1.4;
            margin-top: 0;
            padding: 0;
            color: #000
        }

        .wt-cli-privacy {
            display: none
        }

        .cli-tab-content {
            display: none
        }

        .cli-tab-section .cli-tab-content {
            padding: 10px 20px 5px
        }

        .cli-tab-section {
            margin-top: 5px
        }

        @media (min-width:992px) {
            .cli-modal .cli-modal-dialog {
                max-width: 645px
            }
        }

        .cli-switch .cli-slider:after {
            content: attr(data-cli-disable);
            position: absolute;
            right: 50px;
            color: #000;
            font-size: 12px;
            text-align: right;
            min-width: 80px
        }

        .cli-switch input:checked+.cli-slider:after {
            content: attr(data-cli-enable)
        }

        .cli-privacy-overview:not(.cli-collapsed) .cli-privacy-content {
            max-height: 60px;
            transition: max-height .15s ease-out;
            overflow: hidden
        }

        a.cli-privacy-readmore {
            font-size: 12px;
            margin-top: 12px;
            display: inline-block;
            padding-bottom: 0;
            cursor: pointer;
            color: #000;
            text-decoration: underline
        }

        .cli-modal-footer {
            position: relative
        }

        a.cli-privacy-readmore:before {
            content: attr(data-readmore-text)
        }

        .cli-collapsed a.cli-privacy-readmore:before {
            content: attr(data-readless-text)
        }

        .cli-collapsed .cli-privacy-content {
            transition: max-height .25s ease-in
        }

        .cli-privacy-content p {
            margin-bottom: 0
        }

        .cli-modal-close svg {
            fill: #000
        }

        span.cli-necessary-caption {
            color: #000;
            font-size: 12px
        }

        .cli-tab-section.cli-privacy-tab {
            display: none
        }

        #cookie-law-info-bar .cli-tab-section.cli-privacy-tab {
            display: block
        }

        #cookie-law-info-bar .cli-privacy-overview {
            display: none
        }

        .cli-tab-container .cli-row {
            max-height: 500px;
            overflow-y: auto
        }

        .cli-modal.cli-blowup.cli-out {
            z-index: -1
        }

        .cli-modal.cli-blowup {
            z-index: 999999;
            transform: scale(1)
        }

        .cli-modal.cli-blowup .cli-modal-dialog {
            animation: blowUpModal .5s cubic-bezier(.165, .84, .44, 1) forwards
        }

        .cli-modal.cli-blowup.cli-out .cli-modal-dialog {
            animation: blowUpModalTwo .5s cubic-bezier(.165, .84, .44, 1) forwards
        }

        @keyframes blowUpContent {
            0% {
                transform: scale(1);
                opacity: 1
            }

            99.9% {
                transform: scale(2);
                opacity: 0
            }

            100% {
                transform: scale(0)
            }
        }

        @keyframes blowUpContentTwo {
            0% {
                transform: scale(2);
                opacity: 0
            }

            100% {
                transform: scale(1);
                opacity: 1
            }
        }

        @keyframes blowUpModal {
            0% {
                transform: scale(0)
            }

            100% {
                transform: scale(1)
            }
        }

        @keyframes blowUpModalTwo {
            0% {
                transform: scale(1);
                opacity: 1
            }

            50% {
                transform: scale(.5);
                opacity: 0
            }

            100% {
                transform: scale(0);
                opacity: 0
            }
        }

        .cli-tab-section .cookielawinfo-row-cat-table td,
        .cli-tab-section .cookielawinfo-row-cat-table th {
            font-size: 12px
        }

        .cli_settings_button {
            cursor: pointer
        }

        .wt-cli-sr-only {
            display: none;
            font-size: 16px
        }

        a.wt-cli-element.cli_cookie_close_button {
            text-decoration: none;
            color: #333;
            font-size: 22px;
            line-height: 22px;
            cursor: pointer;
            position: absolute;
            right: 10px;
            top: 5px
        }

        .cli-bar-container {
            float: none;
            margin: 0 auto;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            justify-content: space-between;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center
        }

        .cli-bar-btn_container {
            margin-left: 20px;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
            flex-wrap: nowrap
        }

        .cli-style-v2 a {
            cursor: pointer
        }

        .cli-bar-btn_container a {
            white-space: nowrap
        }

        .cli-style-v2 .cli-plugin-main-link {
            font-weight: inherit
        }

        .cli-style-v2 {
            font-size: 11pt;
            line-height: 18px;
            font-weight: 400
        }

        #cookie-law-info-bar[data-cli-type=widget] .cli-bar-container,
        #cookie-law-info-bar[data-cli-type=popup] .cli-bar-container {
            display: block
        }

        .cli-style-v2 .cli-bar-message {
            width: 70%;
            text-align: left
        }

        #cookie-law-info-bar[data-cli-type=widget] .cli-bar-message,
        #cookie-law-info-bar[data-cli-type=popup] .cli-bar-message {
            width: 100%
        }

        #cookie-law-info-bar[data-cli-type=widget] .cli-style-v2 .cli-bar-btn_container {
            margin-top: 8px;
            margin-left: 0;
            flex-wrap: wrap
        }

        #cookie-law-info-bar[data-cli-type=popup] .cli-style-v2 .cli-bar-btn_container {
            margin-top: 8px;
            margin-left: 0
        }

        #cookie-law-info-bar[data-cli-style=cli-style-v2] .cli_messagebar_head {
            text-align: left;
            margin-bottom: 5px;
            margin-top: 0;
            font-size: 16px
        }

        .cli-style-v2 .cli-bar-message .wt-cli-ccpa-element,
        .cli-style-v2 .cli-bar-message .wt-cli-ccpa-checkbox {
            margin-top: 5px
        }

        .cli-style-v2 .cli-bar-btn_container .cli_action_button,
        .cli-style-v2 .cli-bar-btn_container .cli-plugin-main-link,
        .cli-style-v2 .cli-bar-btn_container .cli_settings_button {
            margin-left: 5px
        }

        .wt-cli-ccpa-checkbox label {
            font-size: inherit;
            cursor: pointer;
            margin: 0 0 0 5px
        }

        #cookie-law-info-bar[data-cli-style=cli-style-v2] {
            padding: 14px 25px
        }

        #cookie-law-info-bar[data-cli-style=cli-style-v2][data-cli-type=widget] {
            padding: 32px 30px
        }

        #cookie-law-info-bar[data-cli-style=cli-style-v2][data-cli-type=popup] {
            padding: 32px 45px
        }

        .cli-style-v2 .cli-plugin-main-link:not(.cli-plugin-button),
        .cli-style-v2 .cli_settings_button:not(.cli-plugin-button),
        .cli-style-v2 .cli_action_button:not(.cli-plugin-button) {
            text-decoration: underline
        }

        .cli-style-v2 .cli-bar-btn_container .cli-plugin-button {
            margin-top: 5px;
            margin-bottom: 5px
        }

        a.wt-cli-ccpa-opt-out {
            white-space: nowrap;
            text-decoration: underline
        }

        .wt-cli-necessary-checkbox {
            display: none !important
        }

        @media (max-width:985px) {
            .cli-style-v2 .cli-bar-message {
                width: 100%
            }

            .cli-style-v2.cli-bar-container {
                justify-content: left;
                flex-wrap: wrap
            }

            .cli-style-v2 .cli-bar-btn_container {
                margin-left: 0;
                margin-top: 10px
            }

            #cookie-law-info-bar[data-cli-style=cli-style-v2],
            #cookie-law-info-bar[data-cli-style=cli-style-v2][data-cli-type=widget],
            #cookie-law-info-bar[data-cli-style=cli-style-v2][data-cli-type=popup] {
                padding: 25px
            }
        }

        .wt-cli-ckyes-brand-logo {
            display: flex;
            align-items: center;
            font-size: 9px;
            color: #111;
            font-weight: 400
        }

        .wt-cli-ckyes-brand-logo img {
            width: 65px;
            margin-left: 2px
        }

        .wt-cli-privacy-overview-actions {
            padding-bottom: 0
        }

        @media only screen and (max-width:479px) and (min-width:320px) {
            .cli-style-v2 .cli-bar-btn_container {
                flex-wrap: wrap
            }
        }

        .wt-cli-cookie-description {
            font-size: 14px;
            line-height: 1.4;
            margin-top: 0;
            padding: 0;
            color: #000
        }

        .wpml-ls-menu-item .wpml-ls-flag {
            display: inline;
            vertical-align: baseline
        }

        .wpml-ls-menu-item .wpml-ls-flag+span {
            margin-left: .3em
        }

        .rtl .wpml-ls-menu-item .wpml-ls-flag+span {
            margin-left: 0;
            margin-right: .3em
        }

        @font-face {
            font-family: 'Epilogue';
            src: url(//thecapvestgroup.com/wp-content/themes/capvest/assets/fonts/Epilogue/Epilogue-Bold.woff2) format("woff2");
            font-weight: 700;
            font-style: normal;
            font-display: swap
        }

        @font-face {
            font-family: 'Epilogue';
            src: url(//thecapvestgroup.com/wp-content/themes/capvest/assets/fonts/Epilogue/Epilogue-Regular.woff2) format("woff2");
            font-weight: 400;
            font-style: normal;
            font-display: swap
        }

        @font-face {
            font-family: 'Epilogue';
            src: url(//thecapvestgroup.com/wp-content/themes/capvest/assets/fonts/Epilogue/Epilogue-Medium.woff2) format("woff2");
            font-weight: 500;
            font-style: normal;
            font-display: swap
        }

        ::-webkit-input-placeholder {
            color: #666
        }

        ::-moz-placeholder {
            color: #666
        }

        :-ms-input-placeholder {
            color: #666
        }

        ::-ms-input-placeholder {
            color: #666
        }

        ::placeholder {
            color: #666
        }

        ::-moz-selection {
            background-color: #f1f0e7;
            color: #000
        }

        ::selection {
            background-color: #f1f0e7;
            color: #000
        }

        select {
            -webkit-appearance: none
        }

        .wpcf7-form-control-wrap.title {
            position: relative
        }

        .wpcf7-form-control-wrap.title select {
            padding-right: 30px !important
        }

        .wpcf7-form-control-wrap.title:after {
            content: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' fill='%23344856' viewBox='-122.9 121.1 105.9 61.9' width='10' height='10'><path d='M-63.2,180.3l43.5-43.5c1.7-1.7,2.7-4,2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.7l-37.2,37.2l-37.2-37.2 c-1.7-1.7-4-2.7-6.5-2.7s-4.8,1-6.5,2.6c-1.9,1.8-2.8,4.2-2.8,6.6c0,2.3,0.9,4.6,2.6,6.5l0,0c11.4,11.5,41,41.2,43,43.3l0.2,0.2 C-73.5,183.9-66.8,183.9-63.2,180.3z'></path></svg>");
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            font-size: 0;
            line-height: 0;
            pointer-events: none
        }

        input,
        textarea {
            outline: none
        }

        input:focus:required:invalid,
        textarea:focus:required:invalid {
            border-color: red
        }

        input:required:valid,
        textarea:required:valid {
            border-color: green
        }

        * {
            margin: 0;
            padding: 0;
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        body {
            font-family: "Epilogue", sans-serif;
            font-size: 16px;
            line-height: 1.55;
            color: #344856;
            font-weight: 400;
            min-width: 320px;
            position: relative;
            overflow-x: hidden;
            background-color: #fff
        }

        .container {
            margin-right: auto;
            margin-left: auto;
            padding-left: 15px;
            padding-right: 15px
        }

        @media (min-width:768px) {
            .container {
                width: 750px
            }
        }

        @media (min-width:992px) {
            .container {
                width: 970px
            }
        }

        @media (min-width:1200px) {
            .container {
                width: 1170px
            }
        }

        a {
            color: #344856;
            text-decoration: none;
            -webkit-transition: all .5s;
            transition: all .5s
        }

        a:hover {
            color: #344856
        }

        img {
            display: block;
            max-width: 100%
        }

        .site-main {
            padding: 50px 0;
            min-height: 650px
        }

        h1.page-title {
            font-size: 30px;
            text-align: center;
            color: #344856
        }

        .cv_header .cv_header_row {
            display: grid;
            grid-template-columns: auto auto;
            grid-column-gap: 0;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            /* padding: 17px 0 */
        }

        .cv_header .cv_header_row .cv_header_col:nth-child(1) {
            max-width: 190px
        }

        @media only screen and (max-width:992px) {
            .cv_header .cv_header_row {
                grid-template-columns: 1fr 1fr;
                height: 55px;
                padding: 10px 0
            }
        }

        @media only screen and (max-width:1023px) {
            .cv_header .cv_navigation.active {
                max-height: 230px
            }
        }

        .cv_header .cv_navigation {
            position: relative
        }

        @media only screen and (max-width:1023px) {
            .cv_header .cv_navigation {
                position: absolute;
                z-index: 2;
                left: 0;
                top: 54px;
                width: 100%;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                max-height: 0px;
                -webkit-transition: all .5s;
                transition: all .5s;
                overflow: hidden
            }
        }

        .cv_header .cv_navigation ul {
            width: 100%;
            list-style: none;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        @media only screen and (max-width:1023px) {
            .cv_header .cv_navigation ul {
                display: block;
                background-color: #f1f0e7;
                padding: 20px
            }
        }

        .cv_header .cv_navigation ul li {
            margin-right: 50px;
            padding: 5px 0
        }

        @media only screen and (max-width:1023px) {
            .cv_header .cv_navigation ul li {
                padding: 0 !important;
                text-align: center
            }

            .cv_header .cv_navigation ul li a {
                display: inline-block !important
            }
        }

        .cv_header .cv_navigation ul li.wpml-ls-item {
            background: #f1f0e7;
            padding: 5px 10px;
            -webkit-transition: all .5s;
            transition: all .5s
        }

        .cv_header .cv_navigation ul li.wpml-ls-item a:after {
            content: none
        }

        @media (hover:hover) {
            .cv_header .cv_navigation ul li.wpml-ls-item:hover {
                background: #344856
            }

            .cv_header .cv_navigation ul li.wpml-ls-item:hover a {
                color: #fff !important
            }
        }

        @media only screen and (max-width:1023px) {
            .cv_header .cv_navigation ul li {
                margin-right: 0
            }

            .cv_header .cv_navigation ul li:last-child {
                margin-bottom: 0
            }
        }

        .cv_header .cv_navigation ul li a {
            font-size: 14px;
            font-weight: 500;
            font-style: normal;
            letter-spacing: -.25px;
            color: #344856;
            position: relative;
            padding: 10px 0
        }

        .cv_header .cv_navigation ul li a:hover {
            color: #adbac2
        }

        .cv_header .cv_navigation ul li a:after {
            content: " ";
            position: absolute;
            top: calc(50% + 1.15em);
            left: 0;
            width: 100%;
            border-top: 1px solid #adbac2;
            -webkit-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transition: -webkit-transform .2s ease-in-out;
            transition: -webkit-transform .2s ease-in-out;
            transition: transform .2s ease-in-out;
            transition: transform .2s ease-in-out, -webkit-transform .2s ease-in-out
        }

        .cv_header .cv_navigation ul li a:hover:after {
            -webkit-transform: scaleX(1);
            transform: scaleX(1)
        }

        @media only screen and (max-width:1023px) {
            .cv_header .cv_navigation ul li a {
                text-align: center;
                display: block;
                padding: 8px 0
            }
        }

        .cv_header .cv_navigation ul li:last-child {
            margin-right: 0
        }

        .cv_header .mobile_menu.open span:nth-child(1) {
            top: 20px;
            -webkit-transform: rotate(135deg);
            transform: rotate(135deg)
        }

        .cv_header .mobile_menu.open span:nth-child(2) {
            opacity: 0;
            left: -60px
        }

        .cv_header .mobile_menu.open span:nth-child(3) {
            top: 20px;
            -webkit-transform: rotate(-135deg);
            transform: rotate(-135deg)
        }

        .cv_header .mobile_menu {
            display: none;
            width: 35px;
            height: 40px;
            position: absolute;
            right: 20px;
            top: 6px;
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
            -webkit-transition: .5s ease-in-out;
            transition: .5s ease-in-out;
            cursor: pointer;
            overflow: hidden
        }

        @media only screen and (max-width:1023px) {
            .cv_header .mobile_menu {
                display: block
            }
        }

        .cv_header .mobile_menu span {
            width: 100%;
            height: 3.5px;
            display: block;
            opacity: 1;
            position: absolute;
            background: #344856;
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
            -webkit-transition: .25s ease-in-out;
            transition: .25s ease-in-out
        }

        .cv_header .mobile_menu span:nth-child(1) {
            top: 10px
        }

        .cv_header .mobile_menu span:nth-child(2) {
            top: 20px
        }

        .cv_header .mobile_menu span:nth-child(3) {
            top: 30px
        }

        /* .cv_hero {
            background-color: #344856;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            position: relative
        } */

        .cv_hero {
            background-color: #344856;
            /* background-size: cover; */
            background-repeat: no-repeat;
            background-position: center;
            position: relative;
            background-size: 100% 100%;
            height: 550px;
        }

        .cv_hero .cv_hero_row {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            height: 600px;
            background-image: url(//thecapvestgroup.com/wp-content/themes/capvest/assets/img/cv_hero_row.svg);
            background-size: auto;
            background-repeat: no-repeat;
            background-position: center right
        }

        @media only screen and (max-width:767px) {
            .cv_hero .cv_hero_row {
                background-size: 290px;
                height: 460px;
                -webkit-box-align: end;
                -ms-flex-align: end;
                align-items: flex-end
            }
        }

        .cv_hero .cv_hero_row .cv_hero_col {
            max-width: 527px;
            position: relative;
            z-index: 1
        }

        .cv_hero .cv_hero_row:after {
            position: absolute;
            width: 85px;
            height: 600px;
            content: '';
            top: 85px;
            right: 100px;
            border: 2px solid #344856;
            z-index: 0
        }

        @media only screen and (max-width:992px) {
            .cv_hero .cv_hero_row:after {
                height: 555px
            }
        }

        @media only screen and (max-width:767px) {
            .cv_hero .cv_hero_row:after {
                width: 40px;
                height: 285px;
                right: 60px
            }
        }

        .cv_hero .cv_hero_row .cv_scroll_down {
            width: 85px;
            height: 83px;
            border-bottom: 2px solid #f1f0e7;
            background-color: #f1f0e7;
            background-image: url(//thecapvestgroup.com/wp-content/themes/capvest/assets/img/cv_hero_down.svg);
            background-position: center;
            background-repeat: no-repeat;
            display: block;
            position: absolute;
            bottom: -42.5px;
            left: 0;
            -webkit-transition: all .5s;
            transition: all .5s
        }

        .cv_hero .cv_hero_row .cv_scroll_down:hover {
            background-position: center 26px
        }

        @media only screen and (max-width:767px) {
            .cv_hero .cv_hero_row .cv_scroll_down:hover {
                background-position: center 20px
            }
        }

        .cv_hero .cv_hero_row .cv_scroll_down:after {
            content: " ";
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            border-top: 2px solid #344856;
            -webkit-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transition: -webkit-transform .2s ease-in-out;
            transition: -webkit-transform .2s ease-in-out;
            transition: transform .2s ease-in-out;
            transition: transform .2s ease-in-out, -webkit-transform .2s ease-in-out
        }

        .cv_hero .cv_hero_row .cv_scroll_down:hover:after {
            -webkit-transform: scaleX(1);
            transform: scaleX(1)
        }

        @media only screen and (max-width:767px) {
            .cv_hero .cv_hero_row .cv_scroll_down {
                width: 50px;
                height: 60px;
                left: 50%;
                margin-left: -25px;
                bottom: -30px;
                background-size: 18px
            }
        }

        .cv_hero .cv_hero_title {
            font-size: 100px;
            color: #fff;
            margin-bottom: 15px;
            line-height: 1.1
        }

        @media only screen and (max-width:1200px) {
            .cv_hero .cv_hero_title {
                font-size: 70px
            }
        }

        @media only screen and (max-width:767px) {
            .cv_hero .cv_hero_title {
                font-size: 40px
            }
        }

        /* .cv_hero .cv_hero_text {
            font-size: 23px;
            color: #fff;
            font-weight: 700
        } */

        .cv_hero .cv_hero_text {
            font-size: 18px;
            color: #fff;
            font-weight: 700;
            margin-top: 300px;
            margin-left: -80px;
            text-align: left;
        }

        @media only screen and (max-width:767px) {
            .cv_hero .cv_hero_text {
                font-size: 18px
            }
        }

        .cv_presentation {
            padding: 160px 0 60px
        }

        @media only screen and (max-width:992px) {
            .cv_presentation {
                padding: 100px 0 60px
            }
        }

        @media only screen and (max-width:767px) {
            .cv_presentation {
                padding: 60px 0 30px
            }
        }

        .cv_presentation .cv_presentation_row {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .cv_presentation .cv_presentation_row .cv_presentation_col {
            max-width: 820px
        }

        .cv_presentation .cv_section_title {
            margin-bottom: 50px;
            font-size: 50px;
            font-weight: 700;
            letter-spacing: -.91px;
            color: #344856;
            text-align: center
        }

        @media only screen and (max-width:1200px) {
            .cv_presentation .cv_section_title {
                font-size: 35px
            }
        }

        @media only screen and (max-width:767px) {
            .cv_presentation .cv_section_title {
                margin-bottom: 30px;
                font-size: 30px;
                line-height: 1.3
            }
        }

        .cv_presentation .cv_section_text {
            font-size: 18px;
            font-weight: 500
        }

        .cv_presentation .cv_section_text p {
            margin-bottom: 15px
        }

        .cv_presentation .cv_section_text p:last-child {
            margin-bottom: 0
        }

        @media only screen and (max-width:767px) {
            .cv_presentation .cv_section_text {
                font-size: 16px
            }
        }

        .cv_presentation .cv_section_btn_row {
            margin-top: 45px;
            text-align: center
        }

        @media only screen and (max-width:480px) {
            .cv_presentation .cv_section_btn_row {
                margin-top: 30px
            }
        }

        .cv_presentation .cv_section_btn_row .cv_section_btn {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 13px 40px;
            background-color: #f1f0e7;
            font-size: 16px;
            font-weight: 700;
            color: #344856;
            text-transform: uppercase;
            -webkit-transition: all .5s;
            transition: all .5s
        }

        .cv_presentation .cv_section_btn_row .cv_section_btn:hover {
            background-color: #344856;
            color: #fff
        }

        @media only screen and (max-width:480px) {
            .cv_presentation .cv_section_btn_row .cv_section_btn {
                display: block
            }
        }

        .cv_notre {
            padding: 60px 0 160px
        }

        @media only screen and (max-width:992px) {
            .cv_notre {
                padding: 60px 0 90px
            }
        }

        @media only screen and (max-width:767px) {
            .cv_notre {
                padding: 80px 0 50px
            }
        }

        .cv_notre .cv_notre_row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-column-gap: 100px
        }

        .cv_notre .cv_notre_row .cv_notre_col:nth-child(2) {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        @media only screen and (max-width:767px) {
            .cv_notre .cv_notre_row .cv_notre_col:nth-child(2) {
                margin-bottom: 65px
            }
        }

        @media only screen and (max-width:767px) {
            .cv_notre .cv_notre_row {
                -webkit-box-orient: vertical;
                -webkit-box-direction: reverse;
                -ms-flex-direction: column-reverse;
                flex-direction: column-reverse;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex
            }
        }

        .cv_notre .cv_section_title {
            margin-bottom: 25px;
            font-size: 25px;
            font-weight: 500;
            letter-spacing: -.45px;
            color: #344856;
            text-transform: uppercase
        }

        @media only screen and (max-width:767px) {
            .cv_notre .cv_section_title {
                text-align: center;
                font-size: 23px
            }
        }

        .cv_notre .cv_section_text p {
            margin-bottom: 25px
        }

        .cv_notre .cv_section_text p:first-child {
            font-weight: 700
        }

        .cv_notre .cv_section_text p:last-child {
            margin-bottom: 0
        }

        .cv_notre .cv_section_text h4 {
            font-weight: 400
        }

        .cv_notre .cv_notre_image {
            max-width: 500px;
            position: relative
        }

        @media only screen and (max-width:767px) {
            .cv_notre .cv_notre_image {
                margin: 0 auto
            }
        }

        .cv_notre .cv_notre_image:before {
            position: absolute;
            content: '';
            top: -39.5px;
            right: 40px;
            width: 299px;
            height: 79px;
            background-color: #f1f0e7;
            z-index: -1
        }

        @media only screen and (max-width:767px) {
            .cv_notre .cv_notre_image:before {
                width: 240px;
                right: 50%;
                margin-right: -121px
            }
        }

        .cv_notre .cv_notre_image:after {
            position: absolute;
            content: '';
            width: 85px;
            height: 85px;
            right: 105px;
            bottom: -25px;
            border: 2px solid #f1f0e7
        }

        @media only screen and (max-width:767px) {
            .cv_notre .cv_notre_image:after {
                left: 20px
            }
        }

        .cv_notre .cv_notre_philosophie_row {
            margin-top: 160px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-column-gap: 100px
        }

        @media only screen and (max-width:767px) {
            .cv_notre .cv_notre_philosophie_row {
                grid-template-columns: 1fr;
                margin-top: 100px;
                grid-row-gap: 80px
            }
        }

        .cv_notre .cv_notre_philosophie_row .cv_notre_image:before {
            right: 105px;
            width: 194px;
            border: 2px solid #f1f0e7;
            background-color: transparent
        }

        @media only screen and (max-width:767px) {
            .cv_notre .cv_notre_philosophie_row .cv_notre_image:before {
                width: 240px;
                right: 50%;
                margin-right: -121px
            }
        }

        .cv_notre .cv_notre_philosophie_row .cv_notre_image:after {
            background-color: #f1f0e7;
            left: 105px;
            right: unset;
            bottom: -42.5px
        }

        @media only screen and (max-width:767px) {
            .cv_notre .cv_notre_philosophie_row .cv_notre_image:after {
                left: 20px
            }
        }

        .cv_nos_valeurs {
            background-color: #fbfaf8;
            padding: 120px 0
        }

        @media only screen and (max-width:992px) {
            .cv_nos_valeurs {
                padding: 90px 0
            }
        }

        @media only screen and (max-width:767px) {
            .cv_nos_valeurs {
                padding: 50px 0
            }
        }

        .cv_nos_valeurs .cv_nos_valeurs_row {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .cv_nos_valeurs .cv_nos_valeurs_row .cv_nos_valeurs_col {
            position: relative;
            width: 100%;
            max-width: 1026px;
            border: 2px solid #344856;
            padding: 90px 0;
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        @media only screen and (max-width:767px) {
            .cv_nos_valeurs .cv_nos_valeurs_row .cv_nos_valeurs_col {
                padding: 50px 10px 20px
            }
        }

        .cv_nos_valeurs .cv_nos_valeurs_row .cv_nos_valeurs_col:before {
            position: absolute;
            bottom: 190px;
            left: -42.5px;
            width: 85px;
            height: 175px;
            content: '';
            background-color: #344856
        }

        @media only screen and (max-width:1200px) {
            .cv_nos_valeurs .cv_nos_valeurs_row .cv_nos_valeurs_col:before {
                display: none
            }
        }

        .cv_nos_valeurs .cv_nos_valeurs_row .cv_nos_valeurs_col:after {
            position: absolute;
            top: 200px;
            right: -42.5px;
            width: 85px;
            height: 85px;
            content: '';
            background-color: #344856
        }

        @media only screen and (max-width:1200px) {
            .cv_nos_valeurs .cv_nos_valeurs_row .cv_nos_valeurs_col:after {
                display: none
            }
        }

        .cv_nos_valeurs .cv_section_title {
            font-size: 25px;
            font-weight: 500;
            letter-spacing: -.45px;
            color: #344856;
            text-align: center;
            text-transform: uppercase;
            margin-bottom: 30px
        }

        @media only screen and (max-width:767px) {
            .cv_nos_valeurs .cv_section_title {
                font-size: 23px;
                margin-bottom: 15px
            }
        }

        .cv_nos_valeurs .cv_section_text {
            text-align: center;
            font-weight: 700;
            margin-bottom: 30px
        }

        .cv_nos_valeurs .cv_nos_valeurs_list {
            position: relative;
            padding: 0 105px;
            list-style: none
        }

        @media only screen and (max-width:767px) {
            .cv_nos_valeurs .cv_nos_valeurs_list {
                padding: 0 20px
            }
        }

        .cv_nos_valeurs .cv_nos_valeurs_list:before {
            position: absolute;
            content: '';
            left: 124px;
            top: 5px;
            width: 1px;
            height: 98%;
            background-color: #344856
        }

        @media only screen and (max-width:996px) {
            .cv_nos_valeurs .cv_nos_valeurs_list:before {
                height: 95%
            }
        }

        @media only screen and (max-width:767px) {
            .cv_nos_valeurs .cv_nos_valeurs_list:before {
                left: 33px;
                height: 89%
            }
        }

        @media only screen and (max-width:320px) {
            .cv_nos_valeurs .cv_nos_valeurs_list:before {
                height: 88%
            }
        }

        .cv_nos_valeurs .cv_nos_valeurs_list li {
            position: relative;
            margin-bottom: 40px;
            padding-left: 100px
        }

        @media only screen and (max-width:767px) {
            .cv_nos_valeurs .cv_nos_valeurs_list li {
                padding-left: 45px;
                margin-bottom: 25px;
                font-size: 14px
            }
        }

        .cv_nos_valeurs .cv_nos_valeurs_list li:before {
            position: absolute;
            left: 0;
            top: 5px;
            content: attr(data-number);
            width: 38px;
            height: 38px;
            color: #fff;
            background-color: #344856;
            display: block;
            text-align: center;
            line-height: 2.2;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: -.33px;
            z-index: 1
        }

        @media only screen and (max-width:767px) {
            .cv_nos_valeurs .cv_nos_valeurs_list li:before {
                width: 25px;
                height: 25px;
                font-size: 13px
            }
        }

        .cv_nos_valeurs .cv_nos_valeurs_list li:after {
            position: absolute;
            content: '';
            left: 19px;
            top: 2px;
            height: 44px;
            width: 1px;
            background-color: #fff;
            z-index: 0
        }

        @media only screen and (max-width:767px) {
            .cv_nos_valeurs .cv_nos_valeurs_list li:after {
                left: 13px;
                height: 30px
            }
        }

        .cv_nos_valeurs .cv_nos_valeurs_list li span {
            font-weight: 700;
            margin-right: 5px
        }

        .cv_presentation_various {
            padding: 120px 0 150px
        }

        @media only screen and (max-width:992px) {
            .cv_presentation_various {
                padding: 90px 0
            }
        }

        @media only screen and (max-width:767px) {
            .cv_presentation_various {
                padding: 50px 0 30px
            }
        }

        .cv_presentation_various .cv_section_title {
            font-size: 50px;
            font-weight: 700;
            letter-spacing: -.91px;
            text-align: center;
            color: #344856
        }

        @media only screen and (max-width:1200px) {
            .cv_presentation_various .cv_section_title {
                font-size: 35px
            }
        }

        @media only screen and (max-width:767px) {
            .cv_presentation_various .cv_section_title {
                font-size: 30px;
                line-height: 1.3
            }
        }

        .cv_presentation_various .cv_presentation_various_row {
            min-height: 100px;
            margin-top: 100px
        }

        @media only screen and (max-width:767px) {
            .cv_presentation_various .cv_presentation_various_row {
                margin-top: 50px
            }
        }

        .cv_presentation_various .cv_presentation_various_row.pv_row_2,
        .cv_presentation_various .cv_presentation_various_row.pv_row_4 {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: reverse;
            -ms-flex-direction: row-reverse;
            flex-direction: row-reverse
        }

        .cv_presentation_various .cv_presentation_various_row {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-line-pack: start;
            align-content: flex-start;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between
        }

        @media only screen and (max-width:767px) {
            .cv_presentation_various .cv_presentation_various_row {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -webkit-box-orient: vertical !important;
                -webkit-box-direction: reverse !important;
                -ms-flex-direction: column-reverse !important;
                flex-direction: column-reverse !important
            }
        }

        .cv_presentation_various .cv_presentation_various_row .cv_presentation_various_col {
            width: 45%
        }

        @media only screen and (max-width:767px) {
            .cv_presentation_various .cv_presentation_various_row .cv_presentation_various_col {
                width: 100%;
                margin-bottom: 50px
            }
        }

        .cv_presentation_various .cv_presentation_various_image {
            max-width: 500px
        }

        @media only screen and (max-width:767px) {
            .cv_presentation_various .cv_presentation_various_image {
                margin: 0 auto
            }
        }

        .cv_presentation_various .cv_presentation_various_logo {
            max-width: 320px;
            margin-bottom: 25px
        }

        @media only screen and (max-width:767px) {
            .cv_presentation_various .cv_presentation_various_logo {
                max-width: 260px;
                margin: 0 auto 20px auto
            }
        }

        @media only screen and (max-width:767px) {
            .cv_presentation_various .cv_presentation_various_logo img {
                margin: 0 auto
            }
        }

        .cv_presentation_various .cv_presentation_various_subtitle {
            margin-bottom: 25px;
            font-size: 25px;
            font-weight: 500;
            letter-spacing: -.45px
        }

        @media only screen and (max-width:767px) {
            .cv_presentation_various .cv_presentation_various_subtitle {
                text-align: center;
                margin-bottom: 20px
            }
        }

        .cv_presentation_various .cv_presentation_various_text {
            color: #344856;
            font-size: 16px
        }

        .cv_presentation_various .cv_presentation_various_text p {
            margin-bottom: 20px
        }

        .cv_presentation_various .cv_presentation_various_button {
            margin-top: 5px;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            color: #344856;
            padding: 12px 40px;
            background-color: #f1f0e7;
            display: inline-block;
            -webkit-box-sizing: border-box;
            box-sizing: border-box
        }

        .cv_presentation_various .cv_presentation_various_button:hover {
            background-color: #344856;
            color: #fff
        }

        @media only screen and (max-width:767px) {
            .cv_presentation_various .cv_presentation_various_button {
                display: block;
                text-align: center;
                font-size: 14px
            }
        }

        .cv_actualites {
            padding: 120px 0 110px;
            background-color: #fbfaf8
        }

        @media only screen and (max-width:992px) {
            .cv_actualites {
                padding: 100px 0 80px
            }
        }

        @media only screen and (max-width:767px) {
            .cv_actualites {
                padding: 50px 0 60px
            }
        }

        .cv_actualites .container {
            position: relative
        }

        .cv_actualites .container:before {
            position: absolute;
            content: '';
            width: 190px;
            height: 100px;
            background-color: #344856;
            top: -170px;
            left: 10px
        }

        @media only screen and (max-width:992px) {
            .cv_actualites .container:before {
                display: none
            }
        }

        .cv_actualites .container:after {
            position: absolute;
            content: '';
            width: 400px;
            height: 85px;
            border: 2px solid #344856;
            bottom: -152.5px;
            right: 10px
        }

        @media only screen and (max-width:992px) {
            .cv_actualites .container:after {
                display: none
            }
        }

        .cv_actualites .cv_actualites_row {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-column-gap: 0;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            text-align: center
        }

        @media only screen and (max-width:767px) {
            .cv_actualites .cv_actualites_row {
                grid-template-columns: 1fr;
                grid-row-gap: 35px
            }
        }

        .cv_actualites .cv_section_title {
            font-size: 50px;
            font-weight: 700;
            letter-spacing: -.91px;
            text-align: center;
            color: #344856;
            margin-bottom: 40px
        }

        @media only screen and (max-width:1200px) {
            .cv_actualites .cv_section_title {
                font-size: 40px
            }
        }

        @media only screen and (max-width:767px) {
            .cv_actualites .cv_section_title {
                font-size: 30px;
                margin-bottom: 15px
            }
        }

        .cv_actualites .cv_section_subtitle {
            font-size: 25px;
            font-weight: 500;
            letter-spacing: -.45px;
            text-align: center;
            margin-bottom: 50px;
            text-transform: uppercase
        }

        @media only screen and (max-width:767px) {
            .cv_actualites .cv_section_subtitle {
                font-size: 23px;
                margin-bottom: 30px
            }
        }

        .cv_actualites .cv_social_links_title {
            font-size: 16px;
            font-weight: 400;
            margin-bottom: 15px
        }

        .cv_actualites .cv_social_links {
            display: grid;
            grid-template-columns: auto auto;
            grid-column-gap: 30px;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            list-style: none
        }

        .cv_actualites .cv_social_links li a {
            width: 30px;
            height: 30px;
            display: block
        }

        .cv_actualites .cv_social_links li:nth-child(1) a {
            background-image: url(//thecapvestgroup.com/wp-content/themes/capvest/assets/img/capvest-actualites.svg);
            background-size: 30px
        }

        .cv_actualites .cv_social_links li:nth-child(1) a:hover {
            background-image: url(//thecapvestgroup.com/wp-content/themes/capvest/assets/img/capvest-actualites-hover.svg)
        }

        .cv_actualites .cv_social_links li:nth-child(2) a {
            background-image: url(//thecapvestgroup.com/wp-content/themes/capvest/assets/img/capvest-linkedin.svg);
            background-size: 30px
        }

        .cv_actualites .cv_social_links li:nth-child(2) a:hover {
            background-image: url(//thecapvestgroup.com/wp-content/themes/capvest/assets/img/capvest-linkedin-hover.svg)
        }

        .cv_contacts {
            padding: 160px 0 120px
        }

        @media only screen and (max-width:992px) {
            .cv_contacts {
                padding: 100px 0 80px
            }
        }

        @media only screen and (max-width:767px) {
            .cv_contacts {
                padding: 50px 0 20px
            }
        }

        .cv_contacts .cv_section_title {
            color: #344856;
            font-size: 50px;
            font-weight: 700;
            letter-spacing: -.91px;
            text-align: center;
            margin-bottom: 40px
        }

        @media only screen and (max-width:1200px) {
            .cv_contacts .cv_section_title {
                font-size: 40px
            }
        }

        @media only screen and (max-width:767px) {
            .cv_contacts .cv_section_title {
                font-size: 30px;
                margin-bottom: 15px
            }
        }

        .cv_contacts .cv_section_text {
            font-size: 25px;
            font-weight: 500;
            letter-spacing: -.45px;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 55px
        }

        @media only screen and (max-width:767px) {
            .cv_contacts .cv_section_text {
                font-size: 23px;
                margin-bottom: 35px
            }
        }

        .cv_contacts .cv_contact_form {
            max-width: 820px;
            margin: 0 auto
        }

        .cv_contacts .cv_contact_form .cv_contact_form_item {
            margin-bottom: 30px
        }

        .cv_contacts .cv_contact_form .cv_contact_form_item .wpcf7-form-control {
            font-family: Epilogue;
            font-weight: 400;
            width: 100%;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            height: 41px;
            font-size: 16px;
            background-color: #fbfaf8;
            border: 1px solid #fbfaf8;
            color: #344856;
            font-weight: 500;
            padding: 0 15px;
            -webkit-transition: all .5s;
            transition: all .5s;
            outline: none
        }

        .cv_contacts .cv_contact_form .cv_contact_form_item .wpcf7-form-control::-webkit-input-placeholder {
            color: #344856;
            font-size: 16px;
            text-transform: uppercase
        }

        .cv_contacts .cv_contact_form .cv_contact_form_item .wpcf7-form-control::-moz-placeholder {
            color: #344856;
            font-size: 16px;
            text-transform: uppercase
        }

        .cv_contacts .cv_contact_form .cv_contact_form_item .wpcf7-form-control:-ms-input-placeholder {
            color: #344856;
            font-size: 16px;
            text-transform: uppercase
        }

        .cv_contacts .cv_contact_form .cv_contact_form_item .wpcf7-form-control::-ms-input-placeholder {
            color: #344856;
            font-size: 16px;
            text-transform: uppercase
        }

        .cv_contacts .cv_contact_form .cv_contact_form_item .wpcf7-form-control::placeholder {
            color: #344856;
            font-size: 16px;
            text-transform: uppercase
        }

        .cv_contacts .cv_contact_form .cv_contact_form_item .wpcf7-form-control:focus {
            border-color: #344856
        }

        .cv_contacts .cv_contact_form .cv_contact_form_item:nth-child(7) {
            text-align: center;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-line-pack: center;
            align-content: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin-bottom: 0
        }

        .cv_contacts .cv_contact_form .wpcf7-textarea {
            padding: 10px 15px !important;
            height: 224px !important;
            max-height: 224px;
            width: 100%;
            min-width: 100%;
            max-width: 100%
        }

        .cv_contacts .cv_contact_form .wpcf7-textarea::-webkit-input-placeholder {
            color: #344856
        }

        .cv_contacts .cv_contact_form .wpcf7-textarea::-moz-placeholder {
            color: #344856
        }

        .cv_contacts .cv_contact_form .wpcf7-textarea:-ms-input-placeholder {
            color: #344856
        }

        .cv_contacts .cv_contact_form .wpcf7-textarea::-ms-input-placeholder {
            color: #344856
        }

        .cv_contacts .cv_contact_form .wpcf7-textarea::placeholder {
            color: #344856
        }

        .cv_contacts .cv_contact_form .wpcf7-submit {
            width: 165px !important;
            margin-top: 10px;
            height: 48px !important;
            border: 2px solid #344856 !important;
            background-color: transparent !important;
            font-weight: 700 !important;
            padding: 10px 40px !important;
            cursor: pointer
        }

        .cv_contacts .cv_contact_form .wpcf7-submit:hover {
            background-color: #344856 !important;
            color: #fff
        }

        @media only screen and (max-width:480px) {
            .cv_contacts .cv_contact_form .wpcf7-submit {
                width: 100% !important
            }
        }

        .cv_contacts .cv_contact_form .wpcf7-spinner {
            margin: 10px auto 0px auto
        }

        .cv_contacts .cv_contact_form .wpcf7-response-output {
            margin: 10px 0 0
        }

        .cv_contacts .cv_contact_form .wpcf7-not-valid-tip {
            font-size: 13px;
            font-weight: 700
        }

        .cv_contacts .cv_contact_form .wpcf7 form.invalid .wpcf7-response-output,
        .cv_contacts .cv_contact_form .wpcf7 form.unaccepted .wpcf7-response-output,
        .cv_contacts .cv_contact_form .wpcf7 form.payment-required .wpcf7-response-output {
            border-color: #df4242;
            background-color: #df4242;
            text-align: center;
            color: #fff;
            font-size: 13px
        }

        .cv_contacts .cv_contact_form .wpcf7 form.sent .wpcf7-response-output {
            border-color: #344856;
            background-color: #344856;
            text-align: center;
            color: #fff;
            font-size: 13px
        }

        .cv_footer {
            background-color: #fbfaf8;
            padding: 30px 0
        }

        .cv_footer .cv_footer_row {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            grid-column-gap: 0;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start
        }

        .cv_footer .cv_footer_row .cv_footer_col {
            max-width: 295px
        }

        @media only screen and (max-width:767px) {
            .cv_footer .cv_footer_row .cv_footer_col {
                margin: 0 auto
            }
        }

        @media only screen and (max-width:992px) {
            .cv_footer .cv_footer_row {
                grid-template-columns: 1fr 1fr 1fr;
                grid-column-gap: 35px
            }
        }

        @media only screen and (max-width:767px) {
            .cv_footer .cv_footer_row {
                grid-template-columns: 1fr;
                grid-row-gap: 35px
            }
        }

        @media only screen and (max-width:480px) {
            .cv_footer .cv_footer_row {
                text-align: center;
                grid-row-gap: 25px
            }
        }

        .cv_footer .cv_footer_logo {
            padding-top: 10px;
            display: block
        }

        @media only screen and (max-width:480px) {
            .cv_footer .cv_footer_logo {
                max-width: 240px
            }
        }

        .cv_footer #footer-menu-2 li a {
            font-weight: 700
        }

        .cv_footer .footer_menu {
            list-style: none;
            min-height: 115px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
            -ms-flex-line-pack: justify;
            align-content: space-between
        }

        @media only screen and (max-width:480px) {
            .cv_footer .footer_menu {
                min-height: auto
            }
        }

        .cv_footer .footer_menu li {
            width: 100%
        }

        .cv_footer .footer_menu li a {
            color: #344856;
            border-bottom: 1px solid transparent
        }

        .cv_footer .footer_menu li a:hover {
            border-bottom: 1px solid #adbac2;
            color: #adbac2
        }

        .cv_footer .footer_menu li:first-child a {
            font-weight: 700
        }

        @media only screen and (max-width:480px) {
            .cv_footer .footer_menu li {
                margin: 5px 0
            }
        }

        .grecaptcha-badge {
            display: none !important
        }

        .cookielawinfo-column-1 {
            width: 25%
        }

        .cookielawinfo-column-2 {
            width: 10%
        }

        .cookielawinfo-column-3 {
            width: 15%
        }

        .cookielawinfo-column-4 {
            width: 50%
        }

        .cookielawinfo-simple thead {
            width: 100%
        }

        .cookielawinfo-simple td {
            padding: 5px 5px 5px 0;
            vertical-align: top
        }

        .cookielawinfo-simple thead th {
            padding-right: 10px;
            text-align: left
        }

        .cookielawinfo-modern {
            border: 1px solid #e3e3e3;
            background-color: #f2f2f2;
            width: 100%;
            border-radius: 6px;
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px
        }

        .cookielawinfo-modern td,
        .cookielawinfo-modern th {
            padding: 5px;
            color: #333
        }

        .cookielawinfo-modern thead {
            font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
            padding: .2em 0 .2em .5em;
            text-align: left;
            color: #4b4b4b;
            background-color: #c8c8c8;
            background-image: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#e3e3e3), color-stop(.6, #b3b3b3));
            background-image: -moz-linear-gradient(top, #d6d6d6, #b0b0b0, #b3b3b3 90%);
            border-bottom: solid 1px #999
        }

        .cookielawinfo-modern th {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 17px;
            line-height: 20px;
            font-style: normal;
            font-weight: 400;
            text-align: left;
            text-shadow: #fff 1px 1px 1px
        }

        .cookielawinfo-modern td {
            line-height: 20px;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 14px;
            border-bottom: 1px solid #fff;
            border-top: 1px solid #fff
        }

        .cookielawinfo-modern tr.cookielawinfo-row:hover {
            background-color: #fff
        }

        .cookielawinfo-elegant {
            border: 1px solid #dfdfdf;
            background-color: #f9f9f9;
            width: 100%;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            font-family: Arial, "Bitstream Vera Sans", Helvetica, Verdana, sans-serif;
            color: #333
        }

        .cookielawinfo-elegant tr {
            border-top-color: #fff;
            border-bottom: 1px solid #dfdfdf;
            color: #555
        }

        .cookielawinfo-elegant th {
            text-shadow: rgba(255, 255, 255, .796875) 0px 1px 0px;
            font-family: Georgia, "Times New Roman", "Bitstream Charter", Times, serif;
            font-weight: 400;
            padding: 7px 7px 8px;
            text-align: left;
            line-height: 1.3em;
            font-size: 14px
        }

        .cookielawinfo-elegant td {
            font-size: 12px;
            padding: 4px 7px 2px;
            vertical-align: top
        }

        .cookielawinfo-rounded {
            background-color: #f5f5f5;
            padding: 5px;
            border-radius: 5px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border: 1px solid #ebebeb
        }

        .cookielawinfo-rounded td,
        .rounded th {
            padding: 1px 5px
        }

        .cookielawinfo-rounded thead {
            text-shadow: 0 1px 0 #fff;
            color: #999
        }

        .cookielawinfo-rounded th {
            text-align: left;
            text-transform: uppercase;
            font-size: 11pt;
            border-bottom: 1px solid #fff;
            padding: 1px 5px
        }

        .cookielawinfo-rounded td {
            font-size: 10pt;
            padding: 5px
        }

        .cookielawinfo-rounded tr.cookielawinfo-row:hover {
            background-color: #fff
        }

        table.cookielawinfo-classic {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            border-left: 1px solid #ccc;
            border-top: 1px solid #ccc;
            color: #333
        }

        table.cookielawinfo-classic thead tr th {
            text-transform: uppercase;
            background: #e2e2e2
        }

        table.cookielawinfo-classic tfoot tr th,
        table.cookielawinfo-classic tfoot tr td {
            text-transform: uppercase;
            color: #000;
            font-weight: 700
        }

        table.cookielawinfo-classic tfoot tr th {
            width: 20%
        }

        table.cookielawinfo-classic tfoot tr td {
            width: 80%
        }

        table.cookielawinfo-classic td,
        table.cookielawinfo-classic th {
            border-right: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
            padding: 5px;
            line-height: 1.8em;
            font-size: .8em;
            vertical-align: top;
            width: 20%
        }

        table.cookielawinfo-classic tr.odd th,
        table.cookielawinfo-classic tr.odd td {
            background: #efefef
        }

        table.cookielawinfo-winter {
            font: 85% "Lucida Grande", "Lucida Sans Unicode", "Trebuchet MS", sans-serif;
            padding: 0;
            margin: 10px 0 20px;
            border-collapse: collapse;
            color: #333;
            background: #f3f5f7
        }

        table.cookielawinfo-winter a {
            color: #3a4856;
            text-decoration: none;
            border-bottom: 1px solid #c6c8cb
        }

        table.cookielawinfo-winter a:visited {
            color: #777
        }

        table.cookielawinfo-winter a:hover {
            color: #000
        }

        table.cookielawinfo-winter caption {
            text-align: left;
            text-transform: uppercase;
            padding-bottom: 10px;
            font: 200% "Lucida Grande", "Lucida Sans Unicode", "Trebuchet MS", sans-serif
        }

        table.cookielawinfo-winter thead th {
            background: #3a4856;
            padding: 15px 10px;
            color: #fff;
            text-align: left;
            font-weight: 400
        }

        table.cookielawinfo-winter tbody {
            border-left: 1px solid #eaecee;
            border-right: 1px solid #eaecee
        }

        table.cookielawinfo-winter tbody {
            border-bottom: 1px solid #eaecee
        }

        table.cookielawinfo-winter tbody td,
        table.cookielawinfo-winter tbody th {
            padding: 10px;
            background: url(//thecapvestgroup.com/wp-content/plugins/cookie-law-info/legacy/public/css/../../images/td_back.gif) repeat-x;
            text-align: left
        }

        table.cookielawinfo-winter tbody tr {
            background: #f3f5f7
        }

        table.cookielawinfo-winter tbody tr.odd {
            background: #f0f2f4
        }

        table.cookielawinfo-winter tbody tr:hover {
            background: #eaecee;
            color: #111
        }

        table.cookielawinfo-winter tfoot td,
        table.cookielawinfo-winter tfoot th,
        table.cookielawinfo-winter tfoot tr {
            text-align: left;
            font: 120% "Lucida Grande", "Lucida Sans Unicode", "Trebuchet MS", sans-serif;
            text-transform: uppercase;
            background: #fff;
            padding: 10px
        }

        @media(max-width:800px) {

            table.cookielawinfo-row-cat-table td,
            table.cookielawinfo-row-cat-table th {
                width: 23%;
                font-size: 12px;
                word-wrap: break-word
            }

            table.cookielawinfo-row-cat-table .cookielawinfo-column-4,
            table.cookielawinfo-row-cat-table .cookielawinfo-column-4 {
                width: 45%
            }
        }

        .cookielawinfo-row-cat-title {
            border-bottom: 1px solid #eee;
            text-align: center
        }

        .cookielawinfo-row-cat-title-head {
            text-align: center
        }

        .cookielawinfo-row-cat-table {
            width: 99%;
            margin-left: 5px
        }

    </style>

    <style>
        @font-face {
            /* font-family: 'Epilogue'; */
            /* src: url("https://fonts.googleapis.com/css2?family=Epilogue:wght@500&display=swap") format("woff2"); */
            /* font-weight: 700;
            font-style: normal;
            font-display: swap */
        } 
    </style>

    <meta
            name="description"
            content="As an investor, developer and manager, the Capvest Group has grown rapidly by offering innovative concepts in international real estate."
        />
    <link rel="canonical" href="https://thecapvestgroup.com/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta
        property="og:title"
        content="Real estate Group, development and management | Capvest Group"
    />
    <meta
        property="og:description"
        content="As an investor, developer and manager, the Capvest Group has grown rapidly by offering innovative concepts in international real estate."
    />
    <meta property="og:url" content="https://thecapvestgroup.com/" />
    <meta
        property="og:site_name"
        content="Real estate Group, development and management | Capvest Group"
    />
    <meta
        property="article:modified_time"
        content="2022-03-30T12:12:41+00:00"
    />
    <meta name="twitter:card" content="summary_large_image" />
    <link rel="dns-prefetch" href="//www.google.com" />
    <link
        rel="alternate"
        type="application/rss+xml"
        title="Real estate Group, development and management | Capvest Group &raquo; Feed"
        href="https://thecapvestgroup.com/feed/"
    />
    <link
        rel="alternate"
        type="application/rss+xml"
        title="Real estate Group, development and management | Capvest Group &raquo; Comments Feed"
        href="https://thecapvestgroup.com/comments/feed/"
    />
    <link
        rel="https://api.w.org/"
        href="https://thecapvestgroup.com/wp-json/"
    />
    <link
        rel="alternate"
        type="application/json"
        href="https://thecapvestgroup.com/wp-json/wp/v2/pages/9"
    />
    <link
        rel="EditURI"
        type="application/rsd+xml"
        title="RSD"
        href="https://thecapvestgroup.com/xmlrpc.php?rsd"
    />
    <link
        rel="wlwmanifest"
        type="application/wlwmanifest+xml"
        href="https://thecapvestgroup.com/wp-includes/wlwmanifest.xml"
    />
    <meta name="generator" content="WordPress 6.1.1" />
    <link rel="shortlink" href="https://thecapvestgroup.com/" />
    <link
        rel="alternate"
        type="application/json+oembed"
        href="https://thecapvestgroup.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fthecapvestgroup.com%2F"
    />
    <link
        rel="alternate"
        type="text/xml+oembed"
        href="https://thecapvestgroup.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fthecapvestgroup.com%2F&#038;format=xml"
    />
    <meta name="generator" content="WPML ver:4.5.13 stt:1,4;" />
    
    <style type="text/css">
        .site-title,
        .site-description {
            position: absolute;
            clip: rect(1px, 1px, 1px, 1px);
        }
    </style>

    <!-- style -->
    <link
        rel="icon"
        href="https://thecapvestgroup.com/wp-content/uploads/2022/03/capvest-favicon-150x150.png"
        sizes="32x32"
    />
    <link
        rel="icon"
        href="https://thecapvestgroup.com/wp-content/uploads/2022/03/capvest-favicon.png"
        sizes="192x192"
    />
    <link
        rel="apple-touch-icon"
        href="https://thecapvestgroup.com/wp-content/uploads/2022/03/capvest-favicon.png"
    />
    <meta
        name="msapplication-TileImage"
        content="https://thecapvestgroup.com/wp-content/uploads/2022/03/capvest-favicon.png"
    />
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BLACKJOE TECHNOLOGIES') }}</title>

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> -->

    <!-- Scripts -->
    <!-- @vite([]) -->

    <script type="application/ld+json" class="yoast-schema-graph">
        {
            "@context": "https://schema.org",
            "@graph": [{
                "@type": "WebPage",
                "@id": "https://thecapvestgroup.com/",
                "url": "https://thecapvestgroup.com/",
                "name": "Real estate Group, development and management | Capvest Group",
                "isPartOf": {
                    "@id": "https://thecapvestgroup.com/#website"
                },
                "about": {
                    "@id": "https://thecapvestgroup.com/#organization"
                },
                "datePublished": "2022-03-15T11:21:44+00:00",
                "dateModified": "2022-03-30T12:12:41+00:00",
                "description": "As an investor, developer and manager, the Capvest Group has grown rapidly by offering innovative concepts in international real estate.",
                "breadcrumb": {
                    "@id": "https://thecapvestgroup.com/#breadcrumb"
                },
                "inLanguage": "en-US",
                "potentialAction": [{
                    "@type": "ReadAction",
                    "target": ["https://thecapvestgroup.com/"]
                }]
            }, 
            {
                "@type": "BreadcrumbList",
                "@id": "https://thecapvestgroup.com/#breadcrumb",
                "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home"
                }]
            }, 
            {
                "@type": "WebSite",
                "@id": "https://thecapvestgroup.com/#website",
                "url": "https://thecapvestgroup.com/",
                "name": "Real estate Group, development and management | Capvest Group",
                "description": "As an investor, developer and manager, the Capvest Group has grown rapidly by offering innovative concepts in international real estate.",
                "publisher": {
                    "@id": "https://thecapvestgroup.com/#organization"
                },
                "potentialAction": [{
                    "@type": "SearchAction",
                    "target": {
                        "@type": "EntryPoint",
                        "urlTemplate": "https://thecapvestgroup.com/?s={search_term_string}"
                    },
                    "query-input": "required name=search_term_string"
                }],
                "inLanguage": "en-US"
            }, 
            {
                "@type": "Organization",
                "@id": "https://thecapvestgroup.com/#organization",
                "name": "Real estate Group, development and management | Capvest Group",
                "url": "https://thecapvestgroup.com/",
                "logo": {
                    "@type": "ImageObject",
                    "inLanguage": "en-US",
                    "@id": "https://thecapvestgroup.com/#/schema/logo/image/",
                    "url": "https://thecapvestgroup.com/wp-content/uploads/2022/03/groupe-capvest-logo.svg",
                    "contentUrl": "https://thecapvestgroup.com/wp-content/uploads/2022/03/groupe-capvest-logo.svg",
                    "width": 190,
                    "height": 18,
                    "caption": "Real estate Group, development and management | Capvest Group"
                },
                "image": {
                    "@id": "https://thecapvestgroup.com/#/schema/logo/image/"
                }
            }]
        }   
    </script> 


    <script> 
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/thecapvestgroup.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.1.1"
            }
        };

        /*! This file is auto-generated */
        !function(e, a, t) {
            var n, r, o, i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode,
                    e = (p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0), i.toDataURL());
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (o = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
                if (p && p.fillText) switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case "flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
                    case "emoji":
                        return !s([129777, 127995, 8205, 129778, 127999], [129777, 127995, 8203, 129778, 127999])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
                t.DOMReady = !0
            }, t.supports.everything || (n = function() {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                "complete" === a.readyState && t.readyCallback()
            })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>

    <style>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }


    </style>

    <style id="global-styles-inline-css">
            body {
                --wp--preset--color--black: #000000;
                --wp--preset--color--cyan-bluish-gray: #abb8c3;
                --wp--preset--color--white: #ffffff;
                --wp--preset--color--pale-pink: #f78da7;
                --wp--preset--color--vivid-red: #cf2e2e;
                --wp--preset--color--luminous-vivid-orange: #ff6900;
                --wp--preset--color--luminous-vivid-amber: #fcb900;
                --wp--preset--color--light-green-cyan: #7bdcb5;
                --wp--preset--color--vivid-green-cyan: #00d084;
                --wp--preset--color--pale-cyan-blue: #8ed1fc;
                --wp--preset--color--vivid-cyan-blue: #0693e3;
                --wp--preset--color--vivid-purple: #9b51e0;
                --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(
                    135deg,
                    rgba(6, 147, 227, 1) 0%,
                    rgb(155, 81, 224) 100%
                );
                --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(
                    135deg,
                    rgb(122, 220, 180) 0%,
                    rgb(0, 208, 130) 100%
                );
                --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(
                    135deg,
                    rgba(252, 185, 0, 1) 0%,
                    rgba(255, 105, 0, 1) 100%
                );
                --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(
                    135deg,
                    rgba(255, 105, 0, 1) 0%,
                    rgb(207, 46, 46) 100%
                );
                --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(
                    135deg,
                    rgb(238, 238, 238) 0%,
                    rgb(169, 184, 195) 100%
                );
                --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(
                    135deg,
                    rgb(74, 234, 220) 0%,
                    rgb(151, 120, 209) 20%,
                    rgb(207, 42, 186) 40%,
                    rgb(238, 44, 130) 60%,
                    rgb(251, 105, 98) 80%,
                    rgb(254, 248, 76) 100%
                );
                --wp--preset--gradient--blush-light-purple: linear-gradient(
                    135deg,
                    rgb(255, 206, 236) 0%,
                    rgb(152, 150, 240) 100%
                );
                --wp--preset--gradient--blush-bordeaux: linear-gradient(
                    135deg,
                    rgb(254, 205, 165) 0%,
                    rgb(254, 45, 45) 50%,
                    rgb(107, 0, 62) 100%
                );
                --wp--preset--gradient--luminous-dusk: linear-gradient(
                    135deg,
                    rgb(255, 203, 112) 0%,
                    rgb(199, 81, 192) 50%,
                    rgb(65, 88, 208) 100%
                );
                --wp--preset--gradient--pale-ocean: linear-gradient(
                    135deg,
                    rgb(255, 245, 203) 0%,
                    rgb(182, 227, 212) 50%,
                    rgb(51, 167, 181) 100%
                );
                --wp--preset--gradient--electric-grass: linear-gradient(
                    135deg,
                    rgb(202, 248, 128) 0%,
                    rgb(113, 206, 126) 100%
                );
                --wp--preset--gradient--midnight: linear-gradient(
                    135deg,
                    rgb(2, 3, 129) 0%,
                    rgb(40, 116, 252) 100%
                );
                --wp--preset--duotone--dark-grayscale: url("#wp-duotone-dark-grayscale");
                --wp--preset--duotone--grayscale: url("#wp-duotone-grayscale");
                --wp--preset--duotone--purple-yellow: url("#wp-duotone-purple-yellow");
                --wp--preset--duotone--blue-red: url("#wp-duotone-blue-red");
                --wp--preset--duotone--midnight: url("#wp-duotone-midnight");
                --wp--preset--duotone--magenta-yellow: url("#wp-duotone-magenta-yellow");
                --wp--preset--duotone--purple-green: url("#wp-duotone-purple-green");
                --wp--preset--duotone--blue-orange: url("#wp-duotone-blue-orange");
                --wp--preset--font-size--small: 13px;
                --wp--preset--font-size--medium: 20px;
                --wp--preset--font-size--large: 36px;
                --wp--preset--font-size--x-large: 42px;
                --wp--preset--spacing--20: 0.44rem;
                --wp--preset--spacing--30: 0.67rem;
                --wp--preset--spacing--40: 1rem;
                --wp--preset--spacing--50: 1.5rem;
                --wp--preset--spacing--60: 2.25rem;
                --wp--preset--spacing--70: 3.38rem;
                --wp--preset--spacing--80: 5.06rem;
            }
            :where(.is-layout-flex) {
                gap: 0.5em;
            }
            body .is-layout-flow > .alignleft {
                float: left;
                margin-inline-start: 0;
                margin-inline-end: 2em;
            }
            body .is-layout-flow > .alignright {
                float: right;
                margin-inline-start: 2em;
                margin-inline-end: 0;
            }
            body .is-layout-flow > .aligncenter {
                margin-left: auto !important;
                margin-right: auto !important;
            }
            body .is-layout-constrained > .alignleft {
                float: left;
                margin-inline-start: 0;
                margin-inline-end: 2em;
            }
            body .is-layout-constrained > .alignright {
                float: right;
                margin-inline-start: 2em;
                margin-inline-end: 0;
            }
            body .is-layout-constrained > .aligncenter {
                margin-left: auto !important;
                margin-right: auto !important;
            }
            body
                .is-layout-constrained
                > :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
                max-width: var(--wp--style--global--content-size);
                margin-left: auto !important;
                margin-right: auto !important;
            }
            body .is-layout-constrained > .alignwide {
                max-width: var(--wp--style--global--wide-size);
            }
            body .is-layout-flex {
                display: flex;
            }
            body .is-layout-flex {
                flex-wrap: wrap;
                align-items: center;
            }
            body .is-layout-flex > * {
                margin: 0;
            }
            :where(.wp-block-columns.is-layout-flex) {
                gap: 2em;
            }
            .has-black-color {
                color: var(--wp--preset--color--black) !important;
            }
            .has-cyan-bluish-gray-color {
                color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }
            .has-white-color {
                color: var(--wp--preset--color--white) !important;
            }
            .has-pale-pink-color {
                color: var(--wp--preset--color--pale-pink) !important;
            }
            .has-vivid-red-color {
                color: var(--wp--preset--color--vivid-red) !important;
            }
            .has-luminous-vivid-orange-color {
                color: var(
                    --wp--preset--color--luminous-vivid-orange
                ) !important;
            }
            .has-luminous-vivid-amber-color {
                color: var(
                    --wp--preset--color--luminous-vivid-amber
                ) !important;
            }
            .has-light-green-cyan-color {
                color: var(--wp--preset--color--light-green-cyan) !important;
            }
            .has-vivid-green-cyan-color {
                color: var(--wp--preset--color--vivid-green-cyan) !important;
            }
            .has-pale-cyan-blue-color {
                color: var(--wp--preset--color--pale-cyan-blue) !important;
            }
            .has-vivid-cyan-blue-color {
                color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }
            .has-vivid-purple-color {
                color: var(--wp--preset--color--vivid-purple) !important;
            }
            .has-black-background-color {
                background-color: var(--wp--preset--color--black) !important;
            }
            .has-cyan-bluish-gray-background-color {
                background-color: var(
                    --wp--preset--color--cyan-bluish-gray
                ) !important;
            }
            .has-white-background-color {
                background-color: var(--wp--preset--color--white) !important;
            }
            .has-pale-pink-background-color {
                background-color: var(
                    --wp--preset--color--pale-pink
                ) !important;
            }
            .has-vivid-red-background-color {
                background-color: var(
                    --wp--preset--color--vivid-red
                ) !important;
            }
            .has-luminous-vivid-orange-background-color {
                background-color: var(
                    --wp--preset--color--luminous-vivid-orange
                ) !important;
            }
            .has-luminous-vivid-amber-background-color {
                background-color: var(
                    --wp--preset--color--luminous-vivid-amber
                ) !important;
            }
            .has-light-green-cyan-background-color {
                background-color: var(
                    --wp--preset--color--light-green-cyan
                ) !important;
            }
            .has-vivid-green-cyan-background-color {
                background-color: var(
                    --wp--preset--color--vivid-green-cyan
                ) !important;
            }
            .has-pale-cyan-blue-background-color {
                background-color: var(
                    --wp--preset--color--pale-cyan-blue
                ) !important;
            }
            .has-vivid-cyan-blue-background-color {
                background-color: var(
                    --wp--preset--color--vivid-cyan-blue
                ) !important;
            }
            .has-vivid-purple-background-color {
                background-color: var(
                    --wp--preset--color--vivid-purple
                ) !important;
            }
            .has-black-border-color {
                border-color: var(--wp--preset--color--black) !important;
            }
            .has-cyan-bluish-gray-border-color {
                border-color: var(
                    --wp--preset--color--cyan-bluish-gray
                ) !important;
            }
            .has-white-border-color {
                border-color: var(--wp--preset--color--white) !important;
            }
            .has-pale-pink-border-color {
                border-color: var(--wp--preset--color--pale-pink) !important;
            }
            .has-vivid-red-border-color {
                border-color: var(--wp--preset--color--vivid-red) !important;
            }
            .has-luminous-vivid-orange-border-color {
                border-color: var(
                    --wp--preset--color--luminous-vivid-orange
                ) !important;
            }
            .has-luminous-vivid-amber-border-color {
                border-color: var(
                    --wp--preset--color--luminous-vivid-amber
                ) !important;
            }
            .has-light-green-cyan-border-color {
                border-color: var(
                    --wp--preset--color--light-green-cyan
                ) !important;
            }
            .has-vivid-green-cyan-border-color {
                border-color: var(
                    --wp--preset--color--vivid-green-cyan
                ) !important;
            }
            .has-pale-cyan-blue-border-color {
                border-color: var(
                    --wp--preset--color--pale-cyan-blue
                ) !important;
            }
            .has-vivid-cyan-blue-border-color {
                border-color: var(
                    --wp--preset--color--vivid-cyan-blue
                ) !important;
            }
            .has-vivid-purple-border-color {
                border-color: var(--wp--preset--color--vivid-purple) !important;
            }
            .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
                background: var(
                    --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple
                ) !important;
            }
            .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
                background: var(
                    --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan
                ) !important;
            }
            .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
                background: var(
                    --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange
                ) !important;
            }
            .has-luminous-vivid-orange-to-vivid-red-gradient-background {
                background: var(
                    --wp--preset--gradient--luminous-vivid-orange-to-vivid-red
                ) !important;
            }
            .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
                background: var(
                    --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray
                ) !important;
            }
            .has-cool-to-warm-spectrum-gradient-background {
                background: var(
                    --wp--preset--gradient--cool-to-warm-spectrum
                ) !important;
            }
            .has-blush-light-purple-gradient-background {
                background: var(
                    --wp--preset--gradient--blush-light-purple
                ) !important;
            }
            .has-blush-bordeaux-gradient-background {
                background: var(
                    --wp--preset--gradient--blush-bordeaux
                ) !important;
            }
            .has-luminous-dusk-gradient-background {
                background: var(
                    --wp--preset--gradient--luminous-dusk
                ) !important;
            }
            .has-pale-ocean-gradient-background {
                background: var(--wp--preset--gradient--pale-ocean) !important;
            }
            .has-electric-grass-gradient-background {
                background: var(
                    --wp--preset--gradient--electric-grass
                ) !important;
            }
            .has-midnight-gradient-background {
                background: var(--wp--preset--gradient--midnight) !important;
            }
            .has-small-font-size {
                font-size: var(--wp--preset--font-size--small) !important;
            }
            .has-medium-font-size {
                font-size: var(--wp--preset--font-size--medium) !important;
            }
            .has-large-font-size {
                font-size: var(--wp--preset--font-size--large) !important;
            }
            .has-x-large-font-size {
                font-size: var(--wp--preset--font-size--x-large) !important;
            }
            .wp-block-navigation a:where(:not(.wp-element-button)) {
                color: inherit;
            }
            :where(.wp-block-columns.is-layout-flex) {
                gap: 2em;
            }
            .wp-block-pullquote {
                font-size: 1.5em;
                line-height: 1.6;
            }
    </style>

    <script
        src = "https://thecapvestgroup.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.1"
        id = "jquery-core-js" > 
    </script> 
    <script id = "wpml-cookie-js-extra" >
        var wpml_cookies = {
            "wp-wpml_current_language": {
                "value": "en",
                "expires": 1,
                "path": "\/"
            }
        };
        var wpml_cookies = {
            "wp-wpml_current_language": {
                "value": "en",
                "expires": 1,
                "path": "\/"
            }
        };
    </script> 

    <script id = "cookie-law-info-js-extra" >
        var Cli_Data = {
            "nn_cookie_ids": [],
            "cookielist": [],
            "non_necessary_cookies": [],
            "ccpaEnabled": "",
            "ccpaRegionBased": "",
            "ccpaBarEnabled": "",
            "strictlyEnabled": ["necessary", "obligatoire"],
            "ccpaType": "gdpr",
            "js_blocking": "1",
            "custom_integration": "",
            "triggerDomRefresh": "",
            "secure_cookies": ""
        };
        var cli_cookiebar_settings = {
            "animate_speed_hide": "500",
            "animate_speed_show": "500",
            "background": "#f1f0e7",
            "border": "#b1a6a6c2",
            "border_on": "",
            "button_1_button_colour": "#344856",
            "button_1_button_hover": "#2a3a45",
            "button_1_link_colour": "#fff",
            "button_1_as_button": "1",
            "button_1_new_win": "",
            "button_2_button_colour": "#333",
            "button_2_button_hover": "#292929",
            "button_2_link_colour": "#444",
            "button_2_as_button": "",
            "button_2_hidebar": "",
            "button_3_button_colour": "#dedfe0",
            "button_3_button_hover": "#b2b2b3",
            "button_3_link_colour": "#333333",
            "button_3_as_button": "1",
            "button_3_new_win": "",
            "button_4_button_colour": "#dedfe0",
            "button_4_button_hover": "#b2b2b3",
            "button_4_link_colour": "#333333",
            "button_4_as_button": "1",
            "button_7_button_colour": "#344856",
            "button_7_button_hover": "#2a3a45",
            "button_7_link_colour": "#fff",
            "button_7_as_button": "1",
            "button_7_new_win": "",
            "font_family": "inherit",
            "header_fix": "",
            "notify_animate_hide": "1",
            "notify_animate_show": "",
            "notify_div_id": "#cookie-law-info-bar",
            "notify_position_horizontal": "right",
            "notify_position_vertical": "bottom",
            "scroll_close": "",
            "scroll_close_reload": "",
            "accept_close_reload": "",
            "reject_close_reload": "",
            "showagain_tab": "",
            "showagain_background": "#fff",
            "showagain_border": "#000",
            "showagain_div_id": "#cookie-law-info-again",
            "showagain_x_position": "100px",
            "text": "#000000",
            "show_once_yn": "",
            "show_once": "10000",
            "logging_on": "",
            "as_popup": "",
            "popup_overlay": "1",
            "bar_heading_text": "",
            "cookie_bar_as": "banner",
            "popup_showagain_position": "bottom-right",
            "widget_position": "left"
        };
        var log_object = {
            "ajax_url": "https:\/\/thecapvestgroup.com\/wp-admin\/admin-ajax.php"
        };
    </script>

    <script async
        src = "https://www.googletagmanager.com/gtag/js?id=G-RKG8JV0R44" > </script> 
    <script> window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-RKG8JV0R44');
    </script>


</head>

    @yield('content')
        
</html>
