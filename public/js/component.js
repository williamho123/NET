webpackJsonp([2],{

/***/ 28:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(29);


/***/ }),

/***/ 29:
/***/ (function(module, exports, __webpack_require__) {

/**
 * Consolidate all Vue components into single JS file to serve.
 */

Vue.component('contact-form', __webpack_require__(30));

/**
 * Mount all Vue components for this app.
 */

// import VueFormWizard from 'vue-form-wizard';
// import 'vue-form-wizard/dist/vue-form-wizard.min.css';
// Vue.use(VueFormWizard);

// Vue virtual DOM might be interfering with all other JS manipulation of the DOM.
//
// window.onload = () => {
//     const app = new Vue({
//         el: "#app"
//     });
// };

/***/ }),

/***/ 30:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(31)
/* script */
var __vue_script__ = __webpack_require__(32)
/* template */
var __vue_template__ = __webpack_require__(33)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/components/ContactForm.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {  return key !== "default" && key.substr(0, 2) !== "__"})) {  console.error("named exports are not supported in *.vue files.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-667ae69d", Component.options)
  } else {
    hotAPI.reload("data-v-667ae69d", Component.options)
' + '  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 31:
/***/ (function(module, exports) {

/* globals __VUE_SSR_CONTEXT__ */

// IMPORTANT: Do NOT use ES2015 features in this file.
// This module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle.

module.exports = function normalizeComponent (
  rawScriptExports,
  compiledTemplate,
  functionalTemplate,
  injectStyles,
  scopeId,
  moduleIdentifier /* server only */
) {
  var esModule
  var scriptExports = rawScriptExports = rawScriptExports || {}

  // ES6 modules interop
  var type = typeof rawScriptExports.default
  if (type === 'object' || type === 'function') {
    esModule = rawScriptExports
    scriptExports = rawScriptExports.default
  }

  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (compiledTemplate) {
    options.render = compiledTemplate.render
    options.staticRenderFns = compiledTemplate.staticRenderFns
    options._compiled = true
  }

  // functional template
  if (functionalTemplate) {
    options.functional = true
  }

  // scopedId
  if (scopeId) {
    options._scopeId = scopeId
  }

  var hook
  if (moduleIdentifier) { // server build
    hook = function (context) {
      // 2.3 injection
      context =
        context || // cached call
        (this.$vnode && this.$vnode.ssrContext) || // stateful
        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional
      // 2.2 with runInNewContext: true
      if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
        context = __VUE_SSR_CONTEXT__
      }
      // inject component styles
      if (injectStyles) {
        injectStyles.call(this, context)
      }
      // register component module identifier for async chunk inferrence
      if (context && context._registeredComponents) {
        context._registeredComponents.add(moduleIdentifier)
      }
    }
    // used by ssr in case component is cached and beforeCreate
    // never gets called
    options._ssrRegister = hook
  } else if (injectStyles) {
    hook = injectStyles
  }

  if (hook) {
    var functional = options.functional
    var existing = functional
      ? options.render
      : options.beforeCreate

    if (!functional) {
      // inject component registration as beforeCreate hook
      options.beforeCreate = existing
        ? [].concat(existing, hook)
        : [hook]
    } else {
      // for template-only hot-reload because in that case the render fn doesn't
      // go through the normalizer
      options._injectStyles = hook
      // register for functioal component in vue file
      options.render = function renderWithStyleInjection (h, context) {
        hook.call(context)
        return existing(h, context)
      }
    }
  }

  return {
    esModule: esModule,
    exports: scriptExports,
    options: options
  }
}


/***/ }),

/***/ 32:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    data: function data() {
        return {
            firstName: '',
            lastName: '',
            email: '',
            subject: '',
            message: ''
        };
    },

    methods: {
        submit: function submit() {
            $.post('/contact', {
                first_name: this.firstName,
                last_name: this.lastName,
                email: this.email,
                subject: this.subject,
                message: this.message
            }).fail(function (data) {
                handleErrors(data);
            }).done(function () {
                swal({
                    title: "Success!",
                    text: "Your message has been submitted.",
                    type: "success",
                    confirmButtonColor: "#4db6ac"
                }, function () {
                    location.reload();
                });
            });
        }
    }
});

/***/ }),

/***/ 33:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "form",
    {
      staticClass: "col s12",
      on: {
        submit: function($event) {
          $event.preventDefault()
          _vm.submit($event)
        }
      }
    },
    [
      _c("div", { staticClass: "row" }, [
        _c("div", { staticClass: "input-field col s6" }, [
          _c("input", {
            directives: [
              {
                name: "model",
                rawName: "v-model",
                value: _vm.firstName,
                expression: "firstName"
              }
            ],
            attrs: { id: "first_name", type: "text" },
            domProps: { value: _vm.firstName },
            on: {
              input: function($event) {
                if ($event.target.composing) {
                  return
                }
                _vm.firstName = $event.target.value
              }
            }
          }),
          _vm._v(" "),
          _c("label", { attrs: { for: "first_name" } }, [_vm._v("First Name")])
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "input-field col s6" }, [
          _c("input", {
            directives: [
              {
                name: "model",
                rawName: "v-model",
                value: _vm.lastName,
                expression: "lastName"
              }
            ],
            attrs: { id: "last_name", type: "text" },
            domProps: { value: _vm.lastName },
            on: {
              input: function($event) {
                if ($event.target.composing) {
                  return
                }
                _vm.lastName = $event.target.value
              }
            }
          }),
          _vm._v(" "),
          _c("label", { attrs: { for: "last_name" } }, [_vm._v("Last Name")])
        ])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "row" }, [
        _c("div", { staticClass: "input-field col s12" }, [
          _c("input", {
            directives: [
              {
                name: "model",
                rawName: "v-model",
                value: _vm.email,
                expression: "email"
              }
            ],
            attrs: { id: "email", type: "email" },
            domProps: { value: _vm.email },
            on: {
              input: function($event) {
                if ($event.target.composing) {
                  return
                }
                _vm.email = $event.target.value
              }
            }
          }),
          _vm._v(" "),
          _c("label", { attrs: { for: "email" } }, [_vm._v("Email")])
        ])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "row" }, [
        _c("div", { staticClass: "input-field col s12" }, [
          _c("input", {
            directives: [
              {
                name: "model",
                rawName: "v-model",
                value: _vm.subject,
                expression: "subject"
              }
            ],
            attrs: { id: "subject", type: "text" },
            domProps: { value: _vm.subject },
            on: {
              input: function($event) {
                if ($event.target.composing) {
                  return
                }
                _vm.subject = $event.target.value
              }
            }
          }),
          _vm._v(" "),
          _c("label", { attrs: { for: "subject" } }, [_vm._v("Subject")])
        ])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "row" }, [
        _c("div", { staticClass: "input-field col s12" }, [
          _c("textarea", {
            directives: [
              {
                name: "model",
                rawName: "v-model",
                value: _vm.message,
                expression: "message"
              }
            ],
            staticClass: "materialize-textarea",
            attrs: { id: "message", "data-length": "1500" },
            domProps: { value: _vm.message },
            on: {
              input: function($event) {
                if ($event.target.composing) {
                  return
                }
                _vm.message = $event.target.value
              }
            }
          }),
          _vm._v(" "),
          _c("label", { attrs: { for: "message" } }, [_vm._v("Message")])
        ])
      ]),
      _vm._v(" "),
      _vm._m(0)
    ]
  )
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "row" }, [
      _c("div", { staticClass: "input-field col s12" }, [
        _c(
          "button",
          {
            staticClass: "btn waves-effect waves-light",
            attrs: { type: "submit", name: "action" }
          },
          [
            _vm._v("Submit\n                "),
            _c("i", { staticClass: "material-icons right" }, [_vm._v("send")])
          ]
        )
      ])
    ])
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-667ae69d", module.exports)
  }
}

/***/ })

},[28]);