import * as functions from "./files/functions.js";

import "../scss/style.scss";
import spoller from "./files/spoller.js";
import slider from "./files/slider.js";
import burger from "./files/burger.js";
import search from "./files/search.js";
import basket from "./files/basket.js";
import modal from "./files/modal.js";
import { triggerPassword } from "./files/form.js";
import tab from "./files/tab.js";

functions.mediaAdaptive();
spoller();
slider();
burger();
search();
basket();
modal();
triggerPassword();
tab();