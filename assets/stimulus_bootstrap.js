import { Application } from "@hotwired/stimulus";
import { definitionsFromContext } from "@symfony/stimulus-bridge";

const app = Application.start();
const context = require.context("./controllers", true, /\.js$/);
app.load(definitionsFromContext(context));
