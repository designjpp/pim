pimcore.registerNS("pimcore.plugin.extendadmin");

pimcore.plugin.extendadmin = Class.create(pimcore.plugin.admin, {
    getClassName: function () {
        return "pimcore.plugin.extendadmin";
    },

    initialize: function () {
        pimcore.plugin.broker.registerPlugin(this);
    },

    postOpenObject: function (object, type) {
        // console.log(object.data.general);
        // if (object.data.general.o_className == 'Car' && object.data.data.objectType == "actual-car") {
        //"object"
        if (
            object.data.general.o_className == "Bicicleta" &&
            object.data.general.o_type == "object"
        ) {
            object.toolbar.add({
                text: t("print-pdf"),
                iconCls: "pimcore_icon_pdf",
                scale: "small",
                handler: function () {
                    var path = "/product-print?id=" + object.id;
                    window.open(path);
                }.bind(this),
            });
            pimcore.layout.refresh();
        }
    },
});

var extendadmin = new pimcore.plugin.extendadmin();
