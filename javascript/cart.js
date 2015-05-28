/* ---------- Variables ---------- */
/* ---------- Web Fonts ---------- */
@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 400;
  src: local("Source Sans Pro"), local("SourceSansPro-Regular"), url(http://themes.googleusercontent.com/static/fonts/sourcesanspro/v5/ODelI1aHBYDBqgeIAH2zlNHq-FFgoDNV3GTKpHwuvtI.woff) format("woff");
}

@font-face {
  font-family: 'Source Sans Pro';
  font-style: normal;
  font-weight: 700;
  src: local("Source Sans Pro Bold"), local("SourceSansPro-Bold"), url(http://themes.googleusercontent.com/static/fonts/sourcesanspro/v5/toadOcfmlt9b38dHJxOBGIqjGYJUyOXcBwUQbRaNH6c.woff) format("woff");
}

/* ---------- Mixins ---------- */
/* ---------- Placeholder selectors ---------- */
.item-list::after, .item__interactions::after, .summary::after {
  content: "";
  display: table;
  clear: both;
}

/* ---------- Universal selectors ---------- */
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

/* ---------- Elements ---------- */
body {
  margin: 3em 0;
  font: 100%/1.5 Source Sans Pro, sans-serif;
  background-color: #f0f0f0;
  overflow-y: scroll;
  overflow-x: hidden;
}
@media (min-width: 50em) {
  body {
    font-size: 112.5%;
  }
}

ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

/* ---------- Shared ---------- */
.item,
.modal,
.steps,
.checkout {
  background-color: #fff;
  border-radius: 3px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25);
}

.item__interactions a,
.button {
  -webkit-transition: background-color 0.25s ease-in-out;
  -moz-transition: background-color 0.25s ease-in-out;
  -o-transition: background-color 0.25s ease-in-out;
  transition: background-color 0.25s ease-in-out;
  text-align: center;
  border-radius: 3px;
  cursor: pointer;
}

.empty-hint a,
.info__content a {
  -webkit-transition-property: color, border-bottom-color;
  -moz-transition-property: color, border-bottom-color;
  -o-transition-property: color, border-bottom-color;
  transition-property: color, border-bottom-color;
  -webkit-transition-duration: 0.25s;
  -moz-transition-duration: 0.25s;
  -o-transition-duration: 0.25s;
  transition-duration: 0.25s;
  -webkit-transition-timing-function: ease-in-out;
  -moz-transition-timing-function: ease-in-out;
  -o-transition-timing-function: ease-in-out;
  transition-timing-function: ease-in-out;
  color: #e66b1e;
  border-bottom: 1px solid transparent;
  text-decoration: none;
  cursor: pointer;
}
.empty-hint a:focus, .empty-hint a:hover,
.info__content a:focus,
.info__content a:hover {
  color: #e97a35;
  border-bottom-color: #e97a35;
}
.empty-hint a:active,
.info__content a:active {
  position: relative;
  top: 1px;
}

/* ---------- Items ---------- */
.item-list {
  width: 80%;
  margin: 0 auto 1.5em;
}
.item-list.delayed {
  -webkit-transition: max-height 0.4s ease-in-out;
  -moz-transition: max-height 0.4s ease-in-out;
  -o-transition: max-height 0.4s ease-in-out;
  transition: max-height 0.4s ease-in-out;
}
@media (min-width: 40em) {
  .item-list {
    width: 35em;
  }
}

.item {
  -webkit-transition-property: -webkit-transform, opacity, margin-top;
  -moz-transition-property: -moz-transform, opacity, margin-top;
  -o-transition-property: -o-transform, opacity, margin-top;
  transition-property: transform, opacity, margin-top;
  -webkit-transition-duration: 0.25s;
  -moz-transition-duration: 0.25s;
  -o-transition-duration: 0.25s;
  transition-duration: 0.25s;
  -webkit-transition-timing-function: ease-in-out;
  -moz-transition-timing-function: ease-in-out;
  -o-transition-timing-function: ease-in-out;
  transition-timing-function: ease-in-out;
  -webkit-transition-delay: 0, 0, 0.25s;
  -moz-transition-delay: 0, 0, 0.25s;
  -o-transition-delay: 0, 0, 0.25s;
  transition-delay: 0, 0, 0.25s;
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  width: 100%;
  margin-bottom: 1.5em;
}
.item-list.appearing .item {
  -webkit-transform: translateX(35em);
  -moz-transform: translateX(35em);
  -ms-transform: translateX(35em);
  -o-transform: translateX(35em);
  transform: translateX(35em);
  opacity: 0;
}
.item-list.delayed .item:nth-child(1) {
  -webkit-transition-delay: 0.25s;
  -moz-transition-delay: 0.25s;
  -o-transition-delay: 0.25s;
  transition-delay: 0.25s;
}
.item-list.delayed .item:nth-child(2) {
  -webkit-transition-delay: 0.3s;
  -moz-transition-delay: 0.3s;
  -o-transition-delay: 0.3s;
  transition-delay: 0.3s;
}
.item-list.delayed .item:nth-child(3) {
  -webkit-transition-delay: 0.35s;
  -moz-transition-delay: 0.35s;
  -o-transition-delay: 0.35s;
  transition-delay: 0.35s;
}

.item--disappearing {
  -webkit-transform: translateX(35em);
  -moz-transform: translateX(35em);
  -ms-transform: translateX(35em);
  -o-transform: translateX(35em);
  transform: translateX(35em);
  opacity: 0;
}

.empty-hint {
  -webkit-transition-property: max-height, opacity;
  -moz-transition-property: max-height, opacity;
  -o-transition-property: max-height, opacity;
  transition-property: max-height, opacity;
  -webkit-transition-duration: 0.5s;
  -moz-transition-duration: 0.5s;
  -o-transition-duration: 0.5s;
  transition-duration: 0.5s;
  -webkit-transition-timing-function: ease-in-out;
  -moz-transition-timing-function: ease-in-out;
  -o-transition-timing-function: ease-in-out;
  transition-timing-function: ease-in-out;
  -webkit-transition-delay: 0;
  -moz-transition-delay: 0;
  -o-transition-delay: 0;
  transition-delay: 0;
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  max-height: 0;
  text-align: center;
  opacity: 0;
  overflow: hidden;
  -webkit-backface-visibility: hidden;
}
.empty-hint.is-visible {
  max-height: 20em;
  opacity: 1;
}
.empty-hint p {
  margin: 1.5em;
}
@media (min-width: 40em) {
  .empty-hint p {
    padding: 1em;
  }
}
.empty-hint a {
  font-weight: bold;
}

@media (min-width: 40em) {
  .item__information {
    display: table;
  }
}

.item__image {
  padding: 1.5em;
  border-bottom: 1px solid rgba(221, 221, 221, 0.35);
  vertical-align: middle;
}
.item__image img {
  display: block;
  width: 60%;
  height: auto;
  margin: 0 auto;
  border-radius: 5px;
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
  -webkit-backface-visibility: hidden;
}
.item__image img:hover, .item__image img:focus {
  -webkit-animation: tilt 0.25s ease-in-out;
  -moz-animation: tilt 0.25s ease-in-out;
  -ms-animation: tilt 0.25s ease-in-out;
  animation: tilt 0.25s ease-in-out;
}
@media (min-width: 40em) {
  .item__image {
    display: table-cell;
    width: 7em;
    padding: 0;
    border-right: 1px solid rgba(221, 221, 221, 0.35);
    border-bottom: 0;
  }
}

.item__body {
  padding: 1.5em 1.5em 0.5em;
}
@media (min-width: 40em) {
  .item__body {
    display: table-cell;
    width: 23em;
    padding: 0.75em 1em;
    border-right: 1px solid rgba(221, 221, 221, 0.35);
  }
}

.item__title {
  margin-top: 0;
  margin-bottom: 0.5rem;
  font-size: 1em;
}

.item__description {
  margin-top: 0;
  margin-bottom: 0;
  font-size: 0.9em;
}

.item__price {
  padding: 0 1.5em 1.5em;
  color: #eb894c;
  font-weight: bold;
  border-radius: 0 3px 3px 0;
  vertical-align: middle;
}
@media (min-width: 40em) {
  .item__price {
    display: table-cell;
    width: 5em;
    padding: 0;
    text-align: center;
    background-color: #fcfcfc;
  }
}

.item__interactions {
  display: block;
  width: 100%;
  padding: 1.5em;
  color: #666;
  font-size: 0.8em;
  border-top: 1px solid rgba(221, 221, 221, 0.35);
}
.item__interactions span {
  margin-left: 0.5em;
}
.item__interactions a {
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, rgba(255, 255, 255, 0.6)), color-stop(100%, rgba(255, 255, 255, 0)));
  background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.6), rgba(255, 255, 255, 0));
  background-image: -moz-linear-gradient(top, rgba(255, 255, 255, 0.6), rgba(255, 255, 255, 0));
  background-image: -o-linear-gradient(top, rgba(255, 255, 255, 0.6), rgba(255, 255, 255, 0));
  background-image: linear-gradient(top, rgba(255, 255, 255, 0.6), rgba(255, 255, 255, 0));
  -webkit-transition-property: opacity, background-color;
  -moz-transition-property: opacity, background-color;
  -o-transition-property: opacity, background-color;
  transition-property: opacity, background-color;
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  display: inline-block;
  width: 3em;
  padding: 0.5em;
  background-color: #eaeaea;
}
.item__interactions a.decrease--disabled {
  opacity: 0.5;
  cursor: default;
}
.item__interactions a:not([class*="decrease--disabled"]):focus, .item__interactions a:not([class*="decrease--disabled"]):hover {
  background-color: #efefef;
}
.item__interactions a:not([class*="decrease--disabled"]):active {
  background-color: #e5e5e5;
}
@media (min-width: 40em) {
  .item__interactions {
    padding: 1em;
  }
}

.item__quantity {
  margin-top: 0;
  margin-bottom: 0;
  float: left;
}

.item__remove {
  float: right;
}

/* ---------- Summary ---------- */
.summary {
  width: 80%;
  margin: 0 auto;
}
@media (min-width: 40em) {
  .summary {
    width: 35em;
  }
}

.steps,
.checkout {
  width: 100%;
}
.steps li,
.checkout li {
  padding: 1em;
  border-bottom: 1px solid rgba(221, 221, 221, 0.35);
}
.steps li:last-child,
.checkout li:last-child {
  border-bottom: 0;
}
@media (min-width: 40em) {
  .steps,
  .checkout {
    float: left;
    width: 16.75em;
  }
}

.steps {
  margin-bottom: 1.5em;
}
@media (min-width: 40em) {
  .steps {
    margin-right: 1.5em;
    margin-bottom: 0;
  }
}

.sum {
  float: right;
}

.button {
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, rgba(255, 255, 255, 0.2)), color-stop(100%, rgba(255, 255, 255, 0)));
  background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0));
  background-image: -moz-linear-gradient(top, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0));
  background-image: -o-linear-gradient(top, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0));
  background-image: linear-gradient(top, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0));
  display: block;
  padding: 1em;
  color: #fff;
  font-weight: bold;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.35);
  background-color: #e66b1e;
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
}
.button:hover, .button:focus {
  background-color: #e97a35;
}
.button:active {
  background-color: #d36017;
}

/* ---------- Info ---------- */
.info {
  padding-top: 3em;
  margin-top: 3em;
  border-top: 1px solid rgba(221, 221, 221, 0.35);
}

.info__content {
  width: 80%;
  margin: 0 auto;
  text-align: center;
}
.info__content p {
  margin-top: 0;
  margin-bottom: 1.5em;
}
.info__content p:last-child {
  margin-bottom: 0;
  color: #666;
}
@media (min-width: 40em) {
  .info__content {
    width: 35em;
  }
}

/* ---------- Modal ---------- */
.modal-wrapper {
  -webkit-transition: visibility 0s linear, opacity 0.25s ease-in-out;
  -webkit-transition-delay: 0.25s, 0s;
  -moz-transition: visibility 0s linear 0.25s, opacity 0.25s ease-in-out;
  -o-transition: visibility 0s linear 0.25s, opacity 0.25s ease-in-out;
  transition: visibility 0s linear 0.25s, opacity 0.25s ease-in-out;
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  text-align: center;
  background-color: rgba(17, 17, 17, 0.7);
  opacity: 0;
  visibility: hidden;
  cursor: pointer;
}
.modal-wrapper.is-visible {
  visibility: visible;
  opacity: 1;
  -webkit-transition-delay: 0s;
  -moz-transition-delay: 0s;
  -o-transition-delay: 0s;
  transition-delay: 0s;
}
.modal-wrapper::before {
  content: "";
  display: inline-block;
  height: 100%;
  vertical-align: middle;
}

.modal {
  -webkit-transform: translateY(5em) scale(0.95);
  -moz-transform: translateY(5em) scale(0.95);
  -ms-transform: translateY(5em) scale(0.95);
  -o-transform: translateY(5em) scale(0.95);
  transform: translateY(5em) scale(0.95);
  -webkit-transition: -webkit-transform 0.25s ease-in-out;
  -moz-transition: -moz-transform 0.25s ease-in-out;
  -o-transition: -o-transform 0.25s ease-in-out;
  transition: transform 0.25s ease-in-out;
  display: inline-block;
  width: 70%;
  padding: 1.5em;
  vertical-align: middle;
}
.modal-wrapper.is-visible .modal {
  -webkit-transform: translateY(0) scale(1);
  -moz-transform: translateY(0) scale(1);
  -ms-transform: translateY(0) scale(1);
  -o-transform: translateY(0) scale(1);
  transform: translateY(0) scale(1);
}
.modal p {
  margin: 0;
}
.modal img {
  max-width: 100%;
  margin: 1.5em 0;
}
@media (min-width: 40em) {
  .modal {
    width: 25em;
  }
}

.modal__title {
  margin-top: 0;
  margin-bottom: 0;
  color: #cc0000;
  line-height: 2;
}

.modal__info {
  color: #666;
  font-size: 0.8em;
}

/* ---------- Keyframes ---------- */
@-webkit-keyframes tilt {
  50% {
    -webkit-transform: rotate(-5deg);
    -moz-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    -o-transform: rotate(-5deg);
    transform: rotate(-5deg);
  }
}

@-moz-keyframes tilt {
  50% {
    -webkit-transform: rotate(-5deg);
    -moz-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    -o-transform: rotate(-5deg);
    transform: rotate(-5deg);
  }
}

@-ms-keyframes tilt {
  50% {
    -webkit-transform: rotate(-5deg);
    -moz-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    -o-transform: rotate(-5deg);
    transform: rotate(-5deg);
  }
}

@keyframes tilt {
  50% {
    -webkit-transform: rotate(-5deg);
    -moz-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    -o-transform: rotate(-5deg);
    transform: rotate(-5deg);
  }
}
