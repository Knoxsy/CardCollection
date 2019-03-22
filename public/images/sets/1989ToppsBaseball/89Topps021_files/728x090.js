(function (lib, img, cjs, ss, an) {

var p; // shortcut to reference prototypes
lib.webFontTxtInst = {}; 
var loadedTypekitCount = 0;
var loadedGoogleCount = 0;
var gFontsUpdateCacheList = [];
var tFontsUpdateCacheList = [];
lib.ssMetadata = [];



lib.updateListCache = function (cacheList) {		
	for(var i = 0; i < cacheList.length; i++) {		
		if(cacheList[i].cacheCanvas)		
			cacheList[i].updateCache();		
	}		
};		

lib.addElementsToCache = function (textInst, cacheList) {		
	var cur = textInst;		
	while(cur != null && cur != exportRoot) {		
		if(cacheList.indexOf(cur) != -1)		
			break;		
		cur = cur.parent;		
	}		
	if(cur != exportRoot) {		
		var cur2 = textInst;		
		var index = cacheList.indexOf(cur);		
		while(cur2 != null && cur2 != cur) {		
			cacheList.splice(index, 0, cur2);		
			cur2 = cur2.parent;		
			index++;		
		}		
	}		
	else {		
		cur = textInst;		
		while(cur != null && cur != exportRoot) {		
			cacheList.push(cur);		
			cur = cur.parent;		
		}		
	}		
};		

lib.gfontAvailable = function(family, totalGoogleCount) {		
	lib.properties.webfonts[family] = true;		
	var txtInst = lib.webFontTxtInst && lib.webFontTxtInst[family] || [];		
	for(var f = 0; f < txtInst.length; ++f)		
		lib.addElementsToCache(txtInst[f], gFontsUpdateCacheList);		

	loadedGoogleCount++;		
	if(loadedGoogleCount == totalGoogleCount) {		
		lib.updateListCache(gFontsUpdateCacheList);		
	}		
};		

lib.tfontAvailable = function(family, totalTypekitCount) {		
	lib.properties.webfonts[family] = true;		
	var txtInst = lib.webFontTxtInst && lib.webFontTxtInst[family] || [];		
	for(var f = 0; f < txtInst.length; ++f)		
		lib.addElementsToCache(txtInst[f], tFontsUpdateCacheList);		

	loadedTypekitCount++;		
	if(loadedTypekitCount == totalTypekitCount) {		
		lib.updateListCache(tFontsUpdateCacheList);		
	}		
};
// symbols:
// helper functions:

function mc_symbol_clone() {
	var clone = this._cloneProps(new this.constructor(this.mode, this.startPosition, this.loop));
	clone.gotoAndStop(this.currentFrame);
	clone.paused = this.paused;
	clone.framerate = this.framerate;
	return clone;
}

function getMCSymbolPrototype(symbol, nominalBounds, frameBounds) {
	var prototype = cjs.extend(symbol, cjs.MovieClip);
	prototype.clone = mc_symbol_clone;
	prototype.nominalBounds = nominalBounds;
	prototype.frameBounds = frameBounds;
	return prototype;
	}


(lib.wave3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FAA21B").s().p("AgBABQAAgSgJgMQAUAHABAWQgBAWgSAIQAHgMAAgRg");
	this.shape.setTransform(1.1,0);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.wave3, new cjs.Rectangle(0,-2.9,2.3,6), null);


(lib.wave2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FAA21B").s().p("AgBACQgBgYgMgQQAbAJACAdQgCAdgYAKQAJgQABgVg");
	this.shape.setTransform(1.5,0);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.wave2, new cjs.Rectangle(0,-3.8,3,7.8), null);


(lib.wave1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FAA21B").s().p("AgCADQAAgdgOgRQAPAFAIALQAKAMAAAQQgCAfgcAMQALgSAAgXg");
	this.shape.setTransform(1.7,0);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.wave1, new cjs.Rectangle(0,-4.4,3.4,8.8), null);


(lib.watchSports = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AgzBYQgFAAAAgEIAAinQAAgFAFABIBnAAQAFgBAAAFIAAAcQAAAEgFABIhFAAIAAAfIA5AAQAFAAAAAFIAAAbQAAAEgFAAIg5AAIAAAiIBFAAQAFABAAAEIAAAcQAAAEgFAAg");
	this.shape.setTransform(279.7,49.5);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AAbBYQAAAAgBAAQgBAAAAAAQgBAAAAgBQgBAAAAgBIghhDIgRAAIAABBQAAAEgFAAIgeAAQgFAAAAgEIAAinQAAgFAFABIBLAAQAMAAAKADQAKAFAHAHQAIAIAEAKQAEAKAAALQAAAJgDAIQgCAHgFAHQgFAFgHAFQgHAGgJADIAjBAQABACgBADQgBACgDAAgAgbgMIAkAAQAIAAAGgGQAGgFAAgJQAAgJgGgGQgFgEgJAAIgkAAg");
	this.shape_1.setTransform(262.6,49.5);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#FFFFFF").s().p("AgRBZQgKgBgIgEQgIgEgIgEIgMgLQgHgHgFgHQgFgHgDgJQgDgIgCgIQgCgJAAgKIACgSIAFgQQADgIAFgIQAFgHAHgHIAMgLQAIgEAIgEQAIgEAKgBQAIgCAJAAQAJAAAJACQAJABAJAEQAHAEAHAEQAIAFAGAGQAHAHAEAHQAGAIACAIIAGAQQACAKAAAIQAAAKgCAJQgCAIgEAIQgCAJgGAHQgEAHgHAHQgGAGgIAFQgHAEgHAEQgJAEgJABQgJACgJAAQgJAAgIgCgAgTguQgJAFgHAHQgHAHgDAIQgFAKAAAJQAAALAFAJQADAIAHAHQAHAHAJAFQAKADAJAAQAKAAAJgDQAJgFAIgHQAGgHAFgIQADgJAAgLQAAgJgDgKQgFgIgGgHQgIgHgJgFQgJgDgKAAQgJAAgKADg");
	this.shape_2.setTransform(242.4,49.5);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#FFFFFF").s().p("AgBBbQgDAAgCgDIgqhSIgBAAIgLBPQgBADgEAAIgeAAQgFABAAgGIAdipQAAgEAEAAIAFAAQABAAAAAAQABAAAAABQABAAAAAAQABABAAABIA6BsIAAAAIA7hsQABgDADAAIAEAAQAEAAABAEIAcCpQABAGgGgBIgdAAQgFAAAAgDIgMhPIAAAAIgrBSQAAABAAABQgBAAAAAAQgBABAAAAQgBAAgBAAg");
	this.shape_3.setTransform(219.8,49.5);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#FFFFFF").s().p("AAxBYIgRgRQgJAJgKAEQgHADgHACQgKACgLAAQgMAAgKgEQgKgEgIgGQgHgHgEgJQgEgJAAgJQAAglAigNIAAgBIgFgFQgIgJgEgIQgEgJAAgKQAAgIADgHQADgHAHgGQAGgGAJgEQAKgDAMAAQAKAAAJADQAJADAGAGQAHAGAEAHQADAIAAAJQAAAJgEAJQgDAHgHAHIgNANIAWAWQAGgIADgLIADgGQACgCAFACIASAGQAGABgDAKQgDALgHALIgGAJIAWAUQADADAAACQABADgFAEIgOAOQgCADgDAAQgDAAgDgDgAgpAmQAAAJAHAGQAHAGAKAAQASAAAIgNIgggjQgSAGAAAVgAgag6QgFAEAAAGQAAAGAHAHIAKALQAQgIAAgOQAAgHgEgEQgFgFgIAAQgHAAgEAEg");
	this.shape_4.setTransform(191.5,49.5);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#FFFFFF").s().p("Ag4BHQgEgDADgEIALgVQAEgFAFAEQAUAOAQAAQAGAAAGgFQAEgDAAgIQABgHgHgGQgGgFgNgHIgSgKQgJgFgGgFQgHgHgFgIQgDgJgBgLQABgJADgJQAEgJAHgIQAIgHAKgEQAMgEAOAAQAZAAAcATQAEACgCAGIgOAUQgDAGgIgFQgVgOgMAAQgHABgEAEQgEADAAAHQAAAFAHAGQAGAFAOAHIARAJQAKAFAGAFQAIAHAFAIQAEALAAAMQAAAKgDAJQgFAJgIAIQgHAHgLAEQgMAFgNAAQggAAgYgUg");
	this.shape_5.setTransform(166.6,49.5);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#FFFFFF").s().p("AAzBbQgBAAgBAAQAAAAgBgBQAAAAgBAAQAAgBAAgBIgvhmIAAAAIguBmQAAABAAABQgBAAAAAAQgBABAAAAQgBAAgBAAIgEAAQgDAAgBgEIgwipQgCgFAGAAIAeAAQAEgBAAAEIAWBVIABAAIAohYQAAgBAAgBQABAAAAAAQABgBAAAAQABAAABAAIADAAQAEAAABADIAnBYIABAAIAWhVQABgEADABIAeAAQAGAAgCAFIgvCpQgBAEgEAAg");
	this.shape_6.setTransform(147,49.5);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#FFFFFF").s().p("AgzBYQgFAAAAgEIAAinQAAgFAFABIBnAAQAFgBAAAFIAAAcQAAAEgFABIhFAAIAAAfIA5AAQAFAAAAAFIAAAbQAAAEgFAAIg5AAIAAAiIBFAAQAFABAAAEIAAAcQAAAEgFAAg");
	this.shape_7.setTransform(127.5,49.5);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#FFFFFF").s().p("ABEBbQgDAAgCgDIhihiIAAAAIAABeQgBAEgEAAIgeAAQgFAAAAgEIAAipQAAgFAFAAIADAAQADAAADAEIBhBcIAAhZQAAgFAFABIAfAAQAEgBAAAFIAACpQAAAFgEAAg");
	this.shape_8.setTransform(108.8,49.5);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#FFFFFF").s().p("AgEBZQgJgCgJgDQgIgDgHgFQgHgFgGgGQgGgGgFgIQgFgHgEgIQgDgIgCgJQgCgJAAgKIACgRIAFgRQAEgIAFgIIALgNQAGgGAHgFQAHgFAIgDQAJgEAJgCQAIgCAJAAIAQACIAQAFIAQAHIAOAKQAEADgEAEIgUAVQgDADgEgDQgHgGgIgDQgIgDgKAAQgKAAgIAEQgJAEgHAHQgHAHgEAKQgEAJAAAJQAAALAEAJQAEAJAHAHQAHAHAJAEQAIAEALAAQAMAAAKgEIAAgPIgQAAQgFAAAAgFIAAgYQAAgEAFAAIAzAAQAEAAAAAEIABBEQAAAAAAABQgBABAAAAQAAABAAAAQgBAAAAABQgaAQglAAIgRgCg");
	this.shape_9.setTransform(81.2,49.5);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#FFFFFF").s().p("ABEBbQgDAAgCgDIhihiIAAAAIAABeQAAAEgFAAIgeAAQgFAAAAgEIAAipQAAgFAFAAIADAAQADAAAEAEIBgBcIAAhZQAAgFAFABIAfAAQAEgBAAAFIAACpQAAAFgEAAg");
	this.shape_10.setTransform(61.4,49.5);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#FFFFFF").s().p("AgOBYQgFAAAAgEIAAinQAAgFAFABIAdAAQAFgBAAAFIAACnQAAAEgFAAg");
	this.shape_11.setTransform(46.5,49.5);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#FFFFFF").s().p("AAgBYQgDAAgCgCIg5hOIAABLQAAAFgGAAIgeAAQgGAAAAgFIAAilQAAgFAGAAIAeAAQAGAAAAAFIAABEIA3hHQACgCADAAIAgAAQADAAACADQABADgCADIg7BLIBBBSQACACgCAEQgCAEgDgBg");
	this.shape_12.setTransform(33.6,49.5);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#FFFFFF").s().p("AA0BaQgFAAgDgHIgKgUIhDAAIgJAVQgDAGgHAAIgbAAQgBAAgBAAQAAgBgBAAQAAAAgBAAQAAgBgBAAQAAgBAAAAQAAgBAAAAQAAgBAAgBQAAAAAAgBIBPipQACgDADAAIABAAQADAAACADIBPCpQAAABAAAAQAAABAAABQAAAAAAABQAAAAAAABQgBAAAAABQgBAAAAAAQgBAAAAABQgBAAgBAAgAATAdIgTgpIAAAAIgSApIAlAAg");
	this.shape_13.setTransform(14.4,49.4);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#FFFFFF").s().p("AgzBYQgFAAAAgEIAAinQAAgFAFABIBnAAQAFgBAAAFIAAAcQAAAEgFABIhFAAIAAAfIA5AAQAFAAAAAFIAAAbQAAAEgFAAIg5AAIAAAiIBFAAQAFABAAAEIAAAcQAAAEgFAAg");
	this.shape_14.setTransform(-2.3,49.5);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#FFFFFF").s().p("AAbBYQgBAAAAAAQgBAAAAAAQgBAAAAgBQgBAAAAgBIghhDIgRAAIAABBQAAAEgFAAIgeAAQgFAAAAgEIAAinQAAgFAFABIBLAAQAMAAAKADQAKAFAHAHQAIAIAEAKQAEAKAAALQAAAJgDAIQgCAHgFAHQgFAFgHAFQgHAGgJADIAjBAQABACgBADQgBACgDAAgAgbgMIAkAAQAIAAAGgGQAGgFAAgJQAAgJgGgGQgFgEgJAAIgkAAg");
	this.shape_15.setTransform(-19.4,49.5);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#FFFFFF").s().p("Ag3BYQgFAAAAgEIAAinQAAgFAFABIA6AAQALgBAKAEQAJADAIAHQAHAHAFAIQAEAIAAALQAAAGgDAHQgCAGgEAGQgEAEgFAFIgLAFIAAAAIAMAFQAGADAFAFQAFAFACAGQADAIAAAJQAAALgEAJQgEAIgIAIQgHAFgKAEQgKAEgMgBgAgVA0IAVAAQAJAAAFgEQAFgFAAgJQAAgIgEgEQgGgGgJAAIgVAAgAgVgQIAVAAQAGAAAFgFQAFgFAAgIQAAgHgFgGQgFgEgGAAIgVAAg");
	this.shape_16.setTransform(-36.9,49.5);

	this.shape_17 = new cjs.Shape();
	this.shape_17.graphics.f("#FFFFFF").s().p("AAAAyIgKgHQgDgDADgEIAKgTQAEgLAAgHIAAgDQgEADgGAAQgFAAgEgCIgHgFQgFgHAAgLQAAgFACgEQACgFADgDQAEgEAFgCQAFgCAGAAQAFAAAFADQAGACAEAEQAEAFACAHQACAHAAAJQAAAKgBAJQgCAJgEAIQgFANgKAPQAAAAgBABQAAAAAAAAQgBAAAAABQgBAAAAAAIgDgCg");
	this.shape_17.setTransform(291.5,29);

	this.shape_18 = new cjs.Shape();
	this.shape_18.graphics.f("#FFFFFF").s().p("Ag4BIQgEgEADgEIALgUQAEgGAFAEQAUAOAQAAQAGAAAGgFQAEgDAAgIQABgHgHgGQgGgGgNgGIgSgKQgJgFgGgFQgHgHgFgIQgEgJABgLQAAgJADgKQAEgJAHgHQAIgHAKgEQAMgEAOAAQAZAAAcATQAEACgCAGIgOAUQgDAGgHgFQgWgOgMAAQgHAAgEAFQgEAEAAAFQAAAGAHAGQAGAFAOAHIARAJQAKAFAGAFQAIAHAFAJQAEAJAAANQAAAKgDAJQgFAJgIAHQgHAJgLADQgMAFgNAAQggAAgYgTg");
	this.shape_18.setTransform(279.6,20);

	this.shape_19 = new cjs.Shape();
	this.shape_19.graphics.f("#FFFFFF").s().p("AA0BaQgFAAgDgHIgKgUIhDAAIgJAVQgDAGgHAAIgbAAQgBAAgBAAQAAAAgBgBQAAAAgBAAQAAgBgBAAQAAgBAAAAQAAgBAAAAQAAgBAAgBQAAAAAAgBIBPipQACgDADAAIABAAQADAAACADIBPCpQAAABAAAAQAAABAAABQAAAAAAABQAAAAAAABQgBAAAAABQgBAAAAAAQgBABAAAAQgBAAgBAAgAATAdIgTgpIAAAAIgSApIAlAAg");
	this.shape_19.setTransform(262.6,19.9);

	this.shape_20 = new cjs.Shape();
	this.shape_20.graphics.f("#FFFFFF").s().p("AgBBbQgDAAgCgCIgqhTIgBAAIgLBOQgBAEgEABIgeAAQgFAAAAgGIAdipQAAgEAEAAIAFAAQABAAAAAAQABAAAAABQABAAAAAAQABABAAABIA6BrIAAAAIA7hrQABgDADAAIAEAAQAEAAABAEIAcCpQABAGgGAAIgdAAQgFgBAAgEIgMhOIAAAAIgrBTQAAAAAAABQgBAAAAAAQgBABAAAAQgBAAgBAAg");
	this.shape_20.setTransform(241.7,20);

	this.shape_21 = new cjs.Shape();
	this.shape_21.graphics.f("#FFFFFF").s().p("AA0BaQgFAAgDgHIgKgUIhDAAIgJAVQgDAGgHAAIgbAAQgBAAgBAAQAAAAgBgBQAAAAgBAAQAAgBgBAAQAAgBAAAAQAAgBAAAAQAAgBAAgBQAAAAAAgBIBPipQACgDADAAIABAAQADAAACADIBPCpQAAABAAAAQAAABAAABQAAAAAAABQAAAAAAABQgBAAAAABQgBAAAAAAQgBABAAAAQgBAAgBAAgAATAdIgTgpIAAAAIgSApIAlAAg");
	this.shape_21.setTransform(220.7,19.9);

	this.shape_22 = new cjs.Shape();
	this.shape_22.graphics.f("#FFFFFF").s().p("AAbBZQAAAAgBgBQgBAAAAAAQgBAAAAgBQgBAAAAgBIghhDIgRAAIAABBQAAAEgFABIgeAAQgFgBAAgEIAAinQAAgEAFAAIBLAAQAMAAAKADQAKAFAHAIQAIAHAEAKQAEAKAAALQAAAIgDAJQgCAHgFAHQgFAFgHAGQgHAFgJADIAjBAQABADgBACQgBADgDAAgAgbgMIAkAAQAIAAAGgFQAGgHAAgIQAAgJgGgGQgFgEgJAAIgkAAg");
	this.shape_22.setTransform(202.8,20);

	this.shape_23 = new cjs.Shape();
	this.shape_23.graphics.f("#FFFFFF").s().p("AhIBZQgEgBgBgEIAAinQABgEAEAAIA+AAQAJgBAIACQAIACAIAEQAIACAHAGIAOALIALAMIAIAQQADAHACAJQABAJAAAIQAAAJgBAJIgFARIgIAOIgLAOIgOALIgPAIQgIADgIABQgIACgJABgAglAzIAbAAQAKAAAIgEQAIgDAHgIQAGgHADgJQADgKABgKQgBgKgDgKQgDgIgGgHQgHgHgIgFQgIgEgKAAIgbAAg");
	this.shape_23.setTransform(183.9,20);

	this.shape_24 = new cjs.Shape();
	this.shape_24.graphics.f("#FFFFFF").s().p("AAAAyIgKgHQgDgDADgEIAKgTQAEgLAAgHIAAgDQgEADgGAAQgFAAgEgCIgHgFQgFgHAAgLQAAgFACgEQACgFADgDQAEgEAFgCQAFgCAGAAQAFAAAFADQAGACAEAEQAEAFACAHQACAHAAAJQAAAKgBAJQgCAJgEAIQgFANgKAPQAAAAgBABQAAAAAAAAQgBAAAAABQgBAAAAAAIgDgCg");
	this.shape_24.setTransform(161.6,29);

	this.shape_25 = new cjs.Shape();
	this.shape_25.graphics.f("#FFFFFF").s().p("Ag4BIQgEgEADgEIALgUQAEgGAFAEQAUAOAQAAQAGAAAFgFQAGgDgBgIQAAgHgGgGQgGgGgNgGIgSgKQgJgFgHgFQgHgHgEgIQgDgJAAgLQgBgJAEgKQAEgJAHgHQAHgHALgEQAMgEAOAAQAZAAAcATQAFACgEAGIgMAUQgEAGgHgFQgWgOgLAAQgIAAgEAFQgEAEAAAFQAAAGAHAGQAGAFANAHIASAJQAKAFAGAFQAJAHADAJQAGAJAAANQAAAKgFAJQgDAJgJAHQgHAJgLADQgLAFgOAAQggAAgYgTg");
	this.shape_25.setTransform(149.7,20);

	this.shape_26 = new cjs.Shape();
	this.shape_26.graphics.f("#FFFFFF").s().p("AAzBbQgBAAgBAAQAAAAgBgBQAAAAgBAAQAAgBAAAAIgvhoIAAAAIguBoQAAAAAAABQgBAAAAAAQgBABAAAAQgBAAgBAAIgEAAQgDAAgBgEIgwioQgCgHAGABIAeAAQAEAAAAADIAWBVIABAAIAohYQAAgBAAgBQABAAAAAAQABgBAAAAQABAAABAAIADAAQAEAAABADIAnBYIABAAIAWhVQABgDADAAIAeAAQAGgBgCAHIgvCoQgBAEgEAAg");
	this.shape_26.setTransform(130,20);

	this.shape_27 = new cjs.Shape();
	this.shape_27.graphics.f("#FFFFFF").s().p("AgSBZQgIgBgJgEQgIgEgHgFIgOgKQgGgHgEgHQgFgHgEgIQgDgJgDgIQgBgKAAgJIABgRIAGgRQAEgJAFgHQAEgIAGgFIAOgMQAHgFAIgDQAJgDAIgCIASgCQAJAAAJACQAJACAIADQAIADAIAFQAHAGAGAGQAGAFAGAIQAEAHAEAJIAFARQACAJAAAIQAAAJgCAKQgCAIgDAJQgEAIgEAHQgGAHgGAHQgGAFgHAFQgIAFgIAEQgIAEgJABQgJACgJAAQgIAAgKgCgAgTgtQgJADgHAIQgHAGgEAKQgDAJAAAJQAAAKADAKQAEAJAHAHQAHAHAJAEQAKADAJAAQAKAAAKgDQAIgEAHgHQAHgHAFgJQAEgKAAgKQAAgJgEgJQgFgKgHgGQgHgIgIgDQgKgFgKAAQgJAAgKAFg");
	this.shape_27.setTransform(107.5,20);

	this.shape_28 = new cjs.Shape();
	this.shape_28.graphics.f("#FFFFFF").s().p("AApBZQgFgBAAgEIAAhDIhIAAIAABDQABAEgFABIgeAAQgFgBAAgEIAAinQAAgEAFAAIAeAAQAFAAgBAEIAABAIBIAAIAAhAQAAgEAFAAIAeAAQAFAAAAAEIAACnQAAAEgFABg");
	this.shape_28.setTransform(86.4,20);

	this.shape_29 = new cjs.Shape();
	this.shape_29.graphics.f("#FFFFFF").s().p("Ag4BIQgDgEACgEIAMgUQADgGAFAEQAUAOAQAAQAHAAAEgFQAGgDAAgIQgBgHgGgGQgGgGgMgGIgSgKQgKgFgHgFQgGgHgEgIQgEgJgBgLQAAgJAEgKQAEgJAHgHQAHgHALgEQALgEAPAAQAZAAAcATQAFACgEAGIgMAUQgFAGgHgFQgUgOgMAAQgIAAgFAFQgDAEAAAFQAAAGAHAGQAGAFANAHIASAJQAKAFAHAFQAHAHAEAJQAFAJABANQAAAKgFAJQgEAJgHAHQgJAJgKADQgMAFgNAAQggAAgYgTg");
	this.shape_29.setTransform(68.5,20);

	this.shape_30 = new cjs.Shape();
	this.shape_30.graphics.f("#FFFFFF").s().p("AgOBZQgFgBAAgEIAAhRIg4hTQgBgBAAgBQAAAAAAgBQAAAAAAgBQAAAAABgBQABgDADABIAhAAQAAAAABAAQAAAAABAAQAAAAABABQABAAAAAAIAiA1IAjg1QABAAAAAAQABgBAAAAQABAAAAAAQABAAAAAAIAhAAQADgBACADQAAABAAAAQAAABAAAAQAAABAAAAQgBABAAABIg4BTIAABRQAAAEgFABg");
	this.shape_30.setTransform(45,20);

	this.shape_31 = new cjs.Shape();
	this.shape_31.graphics.f("#FFFFFF").s().p("AgOBZQgFgBAAgEIAAiHIgkAAQgFAAAAgEIAAgcQAAgEAFAAIBvAAQAFAAAAAEIAAAcQAAAEgFAAIgkAAIAACHQAAAEgFABg");
	this.shape_31.setTransform(29.3,20);

	this.shape_32 = new cjs.Shape();
	this.shape_32.graphics.f("#FFFFFF").s().p("AgOBZQgFgBAAgEIAAinQAAgEAFAAIAdAAQAFAAAAAEIAACnQAAAEgFABg");
	this.shape_32.setTransform(17.2,20);

	this.shape_33 = new cjs.Shape();
	this.shape_33.graphics.f("#FFFFFF").s().p("AguBZQgFgBgBgEIAAinQABgEAFAAIAdAAQAFAAAAAEIAACGIA8AAQAEAAAAAFIAAAcQAAAEgEABg");
	this.shape_33.setTransform(6.1,20);

	this.shape_34 = new cjs.Shape();
	this.shape_34.graphics.f("#FFFFFF").s().p("AA0BaQgFAAgDgHIgKgUIhDAAIgJAVQgDAGgHAAIgbAAQgBAAgBAAQAAAAgBgBQAAAAgBAAQAAgBgBAAQAAgBAAAAQAAgBAAAAQAAgBAAgBQAAAAAAgBIBPipQACgDADAAIABAAQADAAACADIBPCpQAAABAAAAQAAABAAABQAAAAAAABQAAAAAAABQgBAAAAABQgBAAAAAAQgBABAAAAQgBAAgBAAgAATAdIgTgpIAAAAIgSApIAlAAg");
	this.shape_34.setTransform(-11,19.9);

	this.shape_35 = new cjs.Shape();
	this.shape_35.graphics.f("#FFFFFF").s().p("AgzBZQgFgBAAgEIAAinQAAgEAFAAIBnAAQAFAAAAAEIAAAcQAAAEgFAAIhFAAIAAAgIA5AAQAFAAAAAEIAAAbQAAAFgFAAIg5AAIAAAiIBFAAQAFAAAAAFIAAAcQAAAEgFABg");
	this.shape_35.setTransform(-27.8,20);

	this.shape_36 = new cjs.Shape();
	this.shape_36.graphics.f("#FFFFFF").s().p("AAbBZQAAAAgBgBQgBAAAAAAQgBAAAAgBQgBAAAAgBIghhDIgRAAIAABBQAAAEgFABIgeAAQgFgBAAgEIAAinQAAgEAFAAIBLAAQAMAAAKADQAKAFAHAIQAIAHAEAKQAEAKAAALQAAAIgDAJQgCAHgFAHQgFAFgHAGQgHAFgJADIAjBAQABADgBACQgBADgDAAgAgbgMIAkAAQAIAAAGgFQAGgHAAgIQAAgJgGgGQgFgEgJAAIgkAAg");
	this.shape_36.setTransform(-44.9,20);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_36},{t:this.shape_35},{t:this.shape_34},{t:this.shape_33},{t:this.shape_32},{t:this.shape_31},{t:this.shape_30},{t:this.shape_29},{t:this.shape_28},{t:this.shape_27},{t:this.shape_26},{t:this.shape_25},{t:this.shape_24},{t:this.shape_23},{t:this.shape_22},{t:this.shape_21},{t:this.shape_20},{t:this.shape_19},{t:this.shape_18},{t:this.shape_17},{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.watchSports, new cjs.Rectangle(-56.5,-0.9,356.1,70.3), null);


(lib.Symbol20 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.rf(["#000000","#FFFFFF"],[0,1],0,-67,0,0,-67,135.1).s().p("AuzEWQmImIAAorMAp3AAAQAAIrmIGIQmJGIorAAQoqAAmJmIg");
	this.shape.setTransform(134,67);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol20, new cjs.Rectangle(0,0,268,134), null);


(lib.Symbol7 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("A3bAwIAAhfMAu3AAAIAABfg");
	this.shape.setTransform(150,4.8);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol7, new cjs.Rectangle(0,0,300,9.6), null);


(lib.showInfoFlexBoxPos = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#14ABE0").s().p("A0nCTIAAklMApOAAAIAAElg");
	this.shape.setTransform(132,14.7);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.showInfoFlexBoxPos, new cjs.Rectangle(0,0,263.9,29.3), null);


(lib.ptC = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#00FF00").s().p("AsSHCIAAuDIYlAAIAAODg");
	this.shape.setTransform(78.7,45);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.ptC, new cjs.Rectangle(0,0,157.3,90), null);


(lib.ptBscale = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#00FF00").s().p("AsSG3IAAttIYlAAIAANtg");
	this.shape.setTransform(78.7,43.9);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.ptBscale, new cjs.Rectangle(0,0,157.3,87.8), null);


(lib.ptBpos = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#00FF00").s().p("AsSG3IAAttIYlAAIAANtg");
	this.shape.setTransform(78.7,45,1,1.025);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.ptBpos, new cjs.Rectangle(0,0,157.3,90), null);


(lib.ptA = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#00FF00").s().p("AsSHCIAAuDIYlAAIAAODg");
	this.shape.setTransform(78.7,45);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.ptA, new cjs.Rectangle(0,0,157.3,90), null);


(lib.progLogoPos = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("A3bB7IAAj1MAu3AAAIAAD1g");
	this.shape.setTransform(150,12.3);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.progLogoPos, new cjs.Rectangle(0,0,300,24.6), null);


(lib.pricePos = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FAA21B").s().p("A3bBlIAAjJMAu3AAAIAADJg");
	this.shape.setTransform(150,10.1);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.pricePos, new cjs.Rectangle(0,0,300,20.3), null);


(lib.Symbol9 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#14ABE0").s().p("ArlB0IAAjnIXLAAIAADng");
	this.shape.setTransform(84.5,11.6,1.138,1);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol9, new cjs.Rectangle(0,0,169,23.3), null);


(lib.congrats2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#14ABE0").s().p("AhVBtQgFgFADgHIASgfQAFgIAIAGQAeAVAYAAQALAAAHgHQAIgGAAgKQAAgMgLgJQgIgIgUgKIgbgOQgPgJgJgIQgLgKgGgNQgGgNAAgRQAAgOAFgOQAGgOALgKQALgLARgGQARgHAVAAQAnAAAqAdQAHAEgEAIIgUAeQgGAJgLgHQgfgUgTAAQgMAAgGAGQgGAGAAAJQAAAJALAIQAJAIAVAKIAaAOQAPAIAKAIQANAKAGANQAHAPAAATQAAAPgGAOQgGAOgMALQgMAMgQAGQgSAHgUAAQgxAAgkgdg");
	this.shape.setTransform(341.1,79.2);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#14ABE0").s().p("ABNCKQgFAAgCgEIhGicIAAAAIhGCcQgCAEgEAAIgGAAQgGAAgBgFIhJkBQgCgJAJAAIAtAAQAFAAACAFIAhCBIABAAIA8iGQACgEAEAAIAGAAQAFAAACAEIA7CGIACAAIAhiBQABgFAGAAIAsAAQAKAAgDAJIhIEBQgCAFgFAAg");
	this.shape_1.setTransform(311.2,79.2);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#14ABE0").s().p("AgbCHQgOgCgMgGQgMgFgLgHQgLgIgKgJQgJgJgHgLQgIgLgFgNQgFgMgDgOQgDgNAAgPQAAgNADgOQADgNAFgNQAFgMAIgLQAHgLAJgKQAKgJALgHQALgIAMgFQAMgGAOgCQAOgDANAAQAOAAAOADQANACANAGQAMAFALAIQALAHAKAJQAJAKAHALQAIALAFAMQAFANADANQADAOAAANQAAAPgDANQgDAOgFAMQgFANgIALQgHALgJAJQgKAJgLAIQgLAHgMAFQgNAGgNACQgOADgOAAQgNAAgOgDgAgdhGQgNAGgLALQgLALgFAOQgGAOAAAOQAAAQAGAOQAFAOALAKQALALANAGQAOAGAPAAQAPAAAPgGQANgGALgLQALgKAFgOQAHgOAAgQQAAgOgHgOQgFgOgLgLQgLgLgNgGQgPgGgPAAQgPAAgOAGg");
	this.shape_2.setTransform(276.7,79.2);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#14ABE0").s().p("AA+CGQgIAAAAgHIAAhlIhsAAIAABlQAAAHgIAAIgtAAQgHAAAAgHIAAj9QAAgHAHAAIAtAAQAIAAAAAHIAABhIBsAAIAAhhQAAgHAIAAIAtAAQAIAAAAAHIAAD9QAAAHgIAAg");
	this.shape_3.setTransform(244.7,79.2);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#14ABE0").s().p("AhVBtQgFgFADgHIASgfQAFgIAIAGQAeAVAYAAQALAAAHgHQAIgGAAgKQAAgMgLgJQgIgIgUgKIgbgOQgPgJgJgIQgLgKgGgNQgGgNAAgRQAAgOAFgOQAGgOALgKQALgLARgGQARgHAVAAQAnAAAqAdQAHAEgEAIIgUAeQgGAJgLgHQgfgUgTAAQgMAAgGAGQgGAGAAAJQAAAJALAIQAJAIAVAKIAaAOQAPAIAKAIQANAKAGANQAHAPAAATQAAAPgGAOQgGAOgMALQgMAMgQAGQgSAHgUAAQgxAAgkgdg");
	this.shape_4.setTransform(217.4,79.2);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#14ABE0").s().p("AgWCGQgIAAAAgHIAAh6IhUh/QgDgEACgDQACgEAFAAIAyAAQADAAADADIA0BPIA1hPQADgDAEAAIAxAAQAFAAACAEQACADgDAEIhVB/IAAB6QAAAHgIAAg");
	this.shape_5.setTransform(181.5,79.2);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#14ABE0").s().p("AgWCGQgHAAAAgHIAAjMIg3AAQgHAAAAgHIAAgqQAAgHAHAAICpAAQAHAAAAAHIAAAqQAAAHgHAAIg3AAIAADMQAAAHgHAAg");
	this.shape_6.setTransform(157.4,79.2);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#14ABE0").s().p("AgWCGQgHAAAAgHIAAj9QAAgHAHAAIAtAAQAHAAAAAHIAAD9QAAAHgHAAg");
	this.shape_7.setTransform(139,79.2);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#14ABE0").s().p("AhHCGQgHAAAAgHIAAj9QAAgHAHAAIAtAAQAIAAAAAHIAADMIBaAAQAHAAAAAHIAAAqQAAAHgHAAg");
	this.shape_8.setTransform(122.1,79.2);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#14ABE0").s().p("ABQCIQgJAAgFgKIgOgeIhnAAIgOAfQgEAJgKAAIgqAAQgEAAgCgDQgCgDACgEIB4kBQACgEAEAAIADAAQAFAAACAEIB4EBQABAEgCADQgCADgEAAgAAdAsIgdg+IAAAAIgcA+IA5AAg");
	this.shape_9.setTransform(96,79);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#14ABE0").s().p("AhPCGQgHAAAAgHIAAj9QAAgHAHAAICfAAQAGAAAAAHIAAAqQAAAHgGAAIhqAAIAAAwIBXAAQAHAAAAAHIAAApQAAAHgHAAIhXAAIAAA0IBqAAQAGAAAAAHIAAAqQAAAHgGAAg");
	this.shape_10.setTransform(70.5,79.2);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#14ABE0").s().p("AApCGQgFAAgBgDIgyhmIgbAAIAABiQAAAHgHAAIguAAQgHAAAAgHIAAj9QAAgHAHAAIByAAQASAAAQAGQAPAHALALQALAMAGAOQAHAQAAARQAAANgEAMQgEALgIAKQgHAJgKAIQgLAIgNAFIA0BhQACAEgBAEQgDADgEAAgAgqgSIA4AAQAMAAAJgJQAIgJAAgNQAAgNgIgJQgJgHgMAAIg4AAg");
	this.shape_11.setTransform(44.5,79.2);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#363636").s().p("AAlA7QAAAAgBAAQgBAAAAgBQAAAAgBAAQAAgBAAgBIAAgzIhEAAIAAAzQAAABAAABQAAAAAAAAQgBABAAAAQgBAAgBAAIgGAAQgBAAgBAAQAAAAAAgBQgBAAAAAAQAAgBAAgBIAAhvQAAgBAAAAQAAgBABAAQAAgBAAAAQABAAABAAIAGAAQABAAABAAQAAAAABABQAAAAAAABQAAAAAAABIAAAxIBEAAIAAgxQAAgBAAAAQABgBAAAAQAAgBABAAQABAAAAAAIAHAAQABAAABAAQAAAAABABQAAAAAAABQAAAAAAABIAABvQAAABAAABQAAAAAAAAQgBABAAAAQgBAAgBAAg");
	this.shape_12.setTransform(219.3,52.5);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#363636").s().p("AgCA8QgGgBgGgDIgKgFIgJgIIgIgJIgFgKIgEgLIgBgNIABgLQACgGACgGIAFgKIAIgJIAJgHIAKgGIAMgEIALgBIAMABIALADQAHADAMAJQACACgCADIgFAEQAAABgBAAQgBAAAAAAQgBAAAAAAQgBAAAAgBQgHgGgJgDQgIgEgJAAIgJABIgJADQgKAGgFAFQgGAHgEAIQgDANAAAFIABAKIACAJQAEAIAGAHQAFAFAKAGIAJADIAJABQAHAAALgEQAHgDAIgGQAAgBABAAQAAAAABAAQAAAAABAAQABABAAAAIAEAEQAAAAAAABQABAAAAAAQAAAAAAABQAAAAAAAAIgBADQgNAJgGADIgLADIgLABIgLgBg");
	this.shape_13.setTransform(204.8,52.5);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#363636").s().p("AgDA7QAAAAgBAAQAAAAgBgBQAAAAAAAAQAAgBAAgBIAAhnIgeAAQgBAAAAAAQgBAAAAgBQgBAAAAgBQAAAAAAgBIAAgFQAAgBAAAAQAAgBABAAQAAgBABAAQAAAAABAAIBHAAQABAAAAAAQABAAAAABQABAAAAABQAAAAAAABIAAAFQAAABAAAAQAAABgBAAQAAABgBAAQAAAAgBAAIgeAAIAABnQAAABAAABQAAAAAAAAQgBABAAAAQgBAAgBAAg");
	this.shape_14.setTransform(192.2,52.5);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#363636").s().p("AAtA8QAAAAgBAAQAAAAAAgBQgBAAAAAAQAAgBgBAAIgMgbIg7AAIgNAbQAAAAAAABQAAAAgBAAQAAABAAAAQgBAAAAAAIgHAAQgBAAAAAAQAAAAgBAAQAAgBAAAAQgBAAAAAAQAAgBAAAAQAAAAAAgBQAAAAAAgBQAAAAAAgBIAzhwQABgBAAAAQAAAAABgBQAAAAAAAAQABAAAAAAIABAAQAAAAABAAQAAAAABAAQAAABAAAAQABAAAAABIAzBwQAAABAAAAQAAABAAAAQAAABAAAAQAAAAAAABQAAAAgBAAQAAAAAAABQgBAAAAAAQAAAAgBAAgAAZAUIgYg3IgBAAIgYA3IAxAAg");
	this.shape_15.setTransform(180,52.5);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#363636").s().p("AAgA9QAAAAgBAAQAAAAAAgBQgBAAAAAAQAAAAAAgBIgehaIAAAAIgcBaQgBABAAAAQAAAAgBAAQAAABAAAAQgBAAAAAAIgDAAQgBAAAAAAQgBgBAAAAQAAAAgBAAQAAgBAAAAIgghxQgBgEAEAAIAHAAQABAAAAAAQABAAAAAAQAAABABAAQAAABAAAAIAYBXIABAAIAchZQAAgBAAAAQAAAAABAAQAAgBAAAAQABAAABAAIACAAQAAAAABAAQAAAAAAABQABAAAAAAQAAAAABABIAcBZIABAAIAXhXQAAAAAAgBQABAAAAgBQAAAAABAAQAAAAABAAIAHAAQAEAAgBAEIggBxQAAAAAAABQgBAAAAAAQAAAAgBABQAAAAgBAAg");
	this.shape_16.setTransform(164.6,52.5);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.congrats2, new cjs.Rectangle(28.8,15.3,327.4,92), null);


(lib.congrats = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#14ABE0").s().p("AhVBrQgFgFAEgGIARgfQAFgIAIAGQAeAVAYAAQAKAAAIgHQAHgGAAgKQAAgLgKgJQgJgIgTgKIgbgOQgOgJgJgIQgLgKgGgMQgGgOAAgQQAAgOAFgOQAGgNAKgLQAMgLAQgGQARgGAVAAQAnAAApAcQAHAEgEAIIgUAdQgGAJgKgGQgggUgTAAQgLAAgGAGQgGAFAAAJQAAAJALAJQAJAHAVALIAaANQAPAIAJAIQANAKAGANQAHAPAAASQAAAPgGAOQgGAOgMALQgMALgQAHQgRAGgUAAQgxAAgkgdg");
	this.shape.setTransform(456.4,48.7);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#14ABE0").s().p("ABMCIQgEAAgCgEIhGiaIAAAAIhFCaQgCAEgEAAIgGAAQgGAAgBgFIhIj9QgCgKAJAAIAsAAQAGAAABAGIAhB/IABAAIA7iEQACgEAEAAIAGAAQAFAAACAEIA6CEIACAAIAhh/QABgGAFAAIAtAAQAJAAgCAKIhID9QgBAFgGAAg");
	this.shape_1.setTransform(426.9,48.7);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#14ABE0").s().p("AgbCGQgNgDgNgFQgMgFgLgIQgLgHgJgJQgJgJgHgLQgIgLgFgMQgFgNgDgNQgCgOAAgOQAAgNACgNQADgOAFgMQAFgMAIgLQAHgLAJgJQAJgKALgHQALgIAMgFQANgFANgDQAOgCANAAQAOAAANACQAOADAMAFQAMAFALAIQALAHAJAKQAKAJAHALQAHALAGAMQAFAMACAOQADANAAANQAAAOgDAOQgCANgFANQgGAMgHALQgHALgKAJQgJAJgLAHQgLAIgMAFQgMAFgOADQgNACgOAAQgNAAgOgCgAgdhFQgNAGgKALQgLAKgGAOQgGAOAAAOQAAAQAGAOQAGANALALQAKAKANAGQAOAGAPAAQAPAAAOgGQAOgGAKgKQALgLAFgNQAHgOAAgQQAAgOgHgOQgFgOgLgKQgKgLgOgGQgOgGgPAAQgPAAgOAGg");
	this.shape_2.setTransform(392.8,48.7);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#14ABE0").s().p("AA9CFQgHAAAAgHIAAhkIhrAAIAABkQAAAHgIAAIgtAAQgHAAAAgHIAAj7QAAgHAHAAIAtAAQAIAAAAAHIAABgIBrAAIAAhgQAAgHAHAAIAuAAQAHAAAAAHIAAD7QAAAHgHAAg");
	this.shape_3.setTransform(361.1,48.7);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#14ABE0").s().p("AhVBrQgFgFAEgGIARgfQAFgIAIAGQAeAVAYAAQAKAAAIgHQAHgGAAgKQAAgLgKgJQgJgIgTgKIgbgOQgOgJgJgIQgLgKgGgMQgGgOAAgQQAAgOAFgOQAGgNAKgLQAMgLAQgGQARgGAVAAQAnAAApAcQAHAEgEAIIgUAdQgGAJgKgGQgggUgTAAQgLAAgGAGQgGAFAAAJQAAAJALAJQAJAHAVALIAaANQAPAIAJAIQANAKAGANQAHAPAAASQAAAPgGAOQgGAOgMALQgMALgQAHQgRAGgUAAQgxAAgkgdg");
	this.shape_4.setTransform(334.1,48.7);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#14ABE0").s().p("AgWCFQgIAAAAgHIAAh5IhTh+QgDgDACgEQACgEAFAAIAxAAQAEAAACAEIA0BOIA1hOQADgEADAAIAxAAQAEAAADAEQABAEgCADIhVB+IAAB5QAAAHgHAAg");
	this.shape_5.setTransform(298.7,48.7);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#14ABE0").s().p("AgWCFQgHAAAAgHIAAjKIg2AAQgHAAAAgHIAAgqQAAgHAHAAICnAAQAHAAAAAHIAAAqQAAAHgHAAIg2AAIAADKQAAAHgHAAg");
	this.shape_6.setTransform(274.9,48.7);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#14ABE0").s().p("AgWCFQgHAAAAgHIAAj7QAAgHAHAAIAtAAQAHAAAAAHIAAD7QAAAHgHAAg");
	this.shape_7.setTransform(256.6,48.7);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#14ABE0").s().p("AhHCFQgGAAgBgHIAAj7QABgHAGAAIAtAAQAIAAAAAHIAADKIBaAAQAHAAAAAHIAAAqQAAAHgHAAg");
	this.shape_8.setTransform(239.9,48.7);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#14ABE0").s().p("ABPCHQgJAAgFgKIgNgeIhnAAIgNAfQgEAJgKAAIgpAAQgFAAgCgDQgCgEACgDIB3j/QACgEAEAAIADAAQAFAAACAEIB2D/QACADgCAEQgCADgFAAgAAdAsIgdg+IAAAAIgcA+IA5AAg");
	this.shape_9.setTransform(214.2,48.6);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#14ABE0").s().p("AhOCFQgGAAgBgHIAAj7QABgHAGAAICdAAQAGAAAAAHIAAAqQAAAHgGAAIhoAAIAAAvIBVAAQAHAAAAAHIAAApQAAAHgHAAIhVAAIAAAzIBoAAQAGAAAAAHIAAAqQAAAHgGAAg");
	this.shape_10.setTransform(188.9,48.7);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#14ABE0").s().p("AAoCFQgEAAgCgEIgxhkIgaAAIAABhQAAAHgIAAIgtAAQgHAAAAgHIAAj7QAAgHAHAAIBxAAQASAAAPAHQAPAGALALQALAMAGAOQAHAPAAARQAAANgEAMQgEAMgHAJQgIAJgKAIQgLAIgNAEIA0BhQACAEgCADQgCAEgEAAgAgpgSIA3AAQAMAAAIgJQAJgIAAgOQAAgNgJgIQgIgHgMAAIg3AAg");
	this.shape_11.setTransform(163.1,48.7);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#14ABE0").s().p("AA9CFQgHAAAAgHIAAhkIhrAAIAABkQAAAHgIAAIgtAAQgHAAAAgHIAAj7QAAgHAHAAIAtAAQAIAAAAAHIAABgIBrAAIAAhgQAAgHAHAAIAuAAQAHAAAAAHIAAD7QAAAHgHAAg");
	this.shape_12.setTransform(122.1,48.7);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#14ABE0").s().p("AgGCGQgNgDgMgFQgNgFgLgIQgLgHgJgJQgJgJgIgLQgHgLgFgMQgGgNgCgNQgDgOAAgOQAAgNADgNQACgOAGgMQAFgMAHgLQAIgLAJgJQAJgKALgHQALgIANgFQAMgFANgDQANgCAOAAQAOAAANACQAMACALAEQALAFALAGIAUAQQAFAFgFAFIgeAfQgEAFgFgFQgLgKgNgFQgNgEgOAAQgQAAgNAGQgNAGgKALQgKALgGAOQgGAOAAAQQAAAOAGAPQAGAOAKAKQAKALANAGQANAGAQAAQAPAAANgFQAMgEALgJQAGgFAEAFIAdAgQAFAEgFAGQgKAJgKAHQgLAHgMAFQgMAEgMACQgMACgNAAQgOAAgNgCg");
	this.shape_13.setTransform(92.8,48.7);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#14ABE0").s().p("AgWCFQgHAAAAgHIAAjKIg2AAQgHAAAAgHIAAgqQAAgHAHAAICnAAQAHAAAAAHIAAAqQAAAHgHAAIg2AAIAADKQAAAHgHAAg");
	this.shape_14.setTransform(67.4,48.7);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#14ABE0").s().p("ABOCHQgIAAgFgKIgOgeIhlAAIgOAfQgEAJgKAAIgqAAQgEAAgCgDQgBgEABgDIB3j/QACgEAEAAIADAAQAEAAADAEIB2D/QABADgBAEQgCADgEAAgAAdAsIgdg+IAAAAIgcA+IA5AAg");
	this.shape_15.setTransform(42.4,48.6);

	this.shape_16 = new cjs.Shape();
	this.shape_16.graphics.f("#14ABE0").s().p("ABMCIQgEAAgCgEIhGiaIAAAAIhFCaQgCAEgEAAIgGAAQgGAAgBgFIhIj9QgCgKAJAAIAsAAQAGAAABAGIAhB/IABAAIA7iEQACgEAEAAIAGAAQAFAAACAEIA6CEIACAAIAhh/QABgGAFAAIAtAAQAJAAgCAKIhID9QgBAFgGAAg");
	this.shape_16.setTransform(10.7,48.7);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_16},{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.congrats, new cjs.Rectangle(-8.4,19.3,479.8,57.3), null);


(lib.bluePanel = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#14ABE0").s().p("EgjdATiMAAAgnDMBG7AAAMAAAAnDg");
	this.shape.setTransform(227,125);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.bluePanel, new cjs.Rectangle(0,0,454,250), null);


(lib.beacon = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FAA21B").s().p("AgUAWQgIgJgBgNQABgMAIgIQAJgJALAAQAMAAAJAJQAIAIABAMQgBANgIAJQgJAHgMABQgLgBgJgHg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.beacon, new cjs.Rectangle(-2.9,-2.9,6,5.9), null);


(lib.slingLogo = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{wave:1});

	// timeline functions:
	this.frame_0 = function() {
		this.stop();
	}
	this.frame_30 = function() {
		this.stop();
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).call(this.frame_0).wait(30).call(this.frame_30).wait(1));

	// waves
	this.wave_3 = new lib.wave1();
	this.wave_3.parent = this;
	this.wave_3.setTransform(0.1,-15.7,1,1,0,0,0,1.8,0);

	this.timeline.addTween(cjs.Tween.get(this.wave_3).wait(10).to({regX:1.7,scaleX:1.16,scaleY:1.16},0).wait(1).to({scaleX:1.29,scaleY:1.29,x:0},0).wait(1).to({scaleX:1.38,scaleY:1.38},0).wait(1).to({scaleX:1.43,scaleY:1.43},0).wait(1).to({regX:1.8,scaleX:1.45,scaleY:1.45,x:0.1},0).wait(1).to({regX:1.7,scaleX:1.26,scaleY:1.26,x:0},0).wait(1).to({scaleX:1.11,scaleY:1.11,x:0.1},0).wait(1).to({scaleX:0.99,scaleY:0.99},0).wait(1).to({scaleX:0.91,scaleY:0.91},0).wait(1).to({scaleX:0.86,scaleY:0.86},0).wait(1).to({regX:1.8,scaleX:0.84,scaleY:0.84},0).wait(1).to({regX:1.7,scaleX:0.88,scaleY:0.88},0).wait(1).to({scaleX:0.91,scaleY:0.91},0).wait(1).to({scaleX:0.94,scaleY:0.94},0).wait(1).to({scaleX:0.96,scaleY:0.96},0).wait(1).to({scaleX:0.98,scaleY:0.98,x:0},0).wait(1).to({scaleX:0.99,scaleY:0.99,x:0.1},0).wait(1).to({scaleX:1,scaleY:1},0).wait(1).to({regX:1.8,scaleX:1,scaleY:1},0).wait(3));

	// waves
	this.wave_2 = new lib.wave2();
	this.wave_2.parent = this;
	this.wave_2.setTransform(-3.6,-15.7,1,1,0,0,0,1.6,0);

	this.timeline.addTween(cjs.Tween.get(this.wave_2).wait(7).to({regX:1.5,scaleX:1.16,scaleY:1.16,x:-3.7},0).wait(1).to({scaleX:1.29,scaleY:1.29},0).wait(1).to({scaleX:1.38,scaleY:1.38,x:-3.8},0).wait(1).to({scaleX:1.43,scaleY:1.43},0).wait(1).to({scaleX:1.45,scaleY:1.45,x:-3.7},0).wait(1).to({scaleX:1.27,scaleY:1.27},0).wait(1).to({scaleX:1.12,scaleY:1.12},0).wait(1).to({scaleX:1,scaleY:1},0).wait(1).to({scaleX:0.92,scaleY:0.92},0).wait(1).to({scaleX:0.87,scaleY:0.87},0).wait(1).to({regX:1.6,scaleX:0.86,scaleY:0.86},0).wait(1).to({regX:1.5,scaleX:0.89,scaleY:0.89},0).wait(1).to({scaleX:0.92,scaleY:0.92},0).wait(1).to({scaleX:0.94,scaleY:0.94},0).wait(1).to({scaleX:0.96,scaleY:0.96},0).wait(1).to({scaleX:0.98,scaleY:0.98},0).wait(1).to({scaleX:0.99,scaleY:0.99},0).wait(1).to({scaleX:1,scaleY:1},0).wait(1).to({regX:1.6,scaleX:1,scaleY:1,x:-3.6},0).wait(6));

	// waves
	this.wave_1 = new lib.wave3();
	this.wave_1.parent = this;
	this.wave_1.setTransform(-6.8,-16,1,1,0,0,0,1.2,-0.1);

	this.timeline.addTween(cjs.Tween.get(this.wave_1).wait(4).to({regX:1.1,regY:0,scaleX:1.16,scaleY:1.16,x:-6.9,y:-15.9},0).wait(1).to({scaleX:1.29,scaleY:1.29},0).wait(1).to({scaleX:1.38,scaleY:1.38},0).wait(1).to({scaleX:1.43,scaleY:1.43},0).wait(1).to({regX:1.2,regY:-0.1,scaleX:1.45,scaleY:1.45,x:-6.7,y:-16},0).wait(1).to({regX:1.1,regY:0,scaleX:1.24,scaleY:1.24,x:-6.8,y:-15.9},0).wait(1).to({scaleX:1.07,scaleY:1.07},0).wait(1).to({scaleX:0.93,scaleY:0.93},0).wait(1).to({scaleX:0.84,scaleY:0.84},0).wait(1).to({scaleX:0.78,scaleY:0.78},0).wait(1).to({regX:1.2,regY:-0.1,scaleX:0.76,scaleY:0.76,y:-16},0).wait(1).to({regX:1.1,regY:0,scaleX:0.82,scaleY:0.82,y:-15.9},0).wait(1).to({scaleX:0.87,scaleY:0.87},0).wait(1).to({scaleX:0.91,scaleY:0.91},0).wait(1).to({scaleX:0.94,scaleY:0.94},0).wait(1).to({scaleX:0.97,scaleY:0.97,x:-6.9},0).wait(1).to({scaleX:0.99,scaleY:0.99,x:-6.8},0).wait(1).to({scaleX:1,scaleY:1},0).wait(1).to({regX:1.2,regY:-0.1,scaleX:1,scaleY:1,y:-16},0).wait(9));

	// dot
	this.beacon = new lib.beacon();
	this.beacon.parent = this;
	this.beacon.setTransform(-12.6,-15.9);

	this.timeline.addTween(cjs.Tween.get(this.beacon).wait(2).to({scaleX:0.93,scaleY:0.93},0).wait(1).to({scaleX:0.79,scaleY:0.79},0).wait(1).to({scaleX:0.59,scaleY:0.59},0).wait(1).to({scaleX:0.32,scaleY:0.32},0).to({_off:true},1).wait(1).to({_off:false},0).wait(1).to({scaleX:0.7,scaleY:0.7},0).wait(1).to({scaleX:1,scaleY:1},0).wait(1).to({scaleX:1.21,scaleY:1.21},0).wait(1).to({scaleX:1.34,scaleY:1.34},0).wait(1).to({scaleX:1.38,scaleY:1.38},0).wait(1).to({scaleX:1.28,scaleY:1.28},0).wait(1).to({scaleX:1.2,scaleY:1.2},0).wait(1).to({scaleX:1.13,scaleY:1.13},0).wait(1).to({scaleX:1.07,scaleY:1.07},0).wait(1).to({scaleX:1.03,scaleY:1.03},0).wait(1).to({scaleX:1.01,scaleY:1.01},0).wait(1).to({scaleX:1,scaleY:1},0).wait(12));

	// FlashAICB
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#2CACDD").s().p("ACcDPQgIgBgGgGIjejfIgBAAIAADVQAAAEgDAEQgDACgFAAIhEAAQgEAAgEgCQgDgEAAgEIAAmBQgBgFAEgDQADgCAFAAIAIAAQAGAAAJAIIDaDSIABAAIAAjKQAAgEADgDQADgDAFAAIBFAAQAEAAAEADQACADAAAEIAAGBQABALgLAAg");
	this.shape.setTransform(11.5,18.7,0.096,0.096);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#2CACDD").s().p("AiRCSQg8g7AAhWQAAhVA8g9QA8g8BVAAQBWAAA8A8QA8A9AABVQAABWg8A7Qg8A9hWAAQhVAAg8g9gAhQhPQghAhAAAvQAAAuAhAiQAiAiAuAAQAvAAAigiQAhgiAAguQAAgvghghQgigjgvAAQguAAgiAjg");
	this.shape_1.setTransform(4.7,18.7,0.096,0.096);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f("#2CACDD").s().p("AgiDIQgEAAgDgCQgDgEAAgEIAAl7QAAgEADgDQADgDAEAAIBEAAQAEAAAEADQADADAAAEIAAF7QAAAEgDAEQgEACgEAAg");
	this.shape_2.setTransform(-0.9,18.7,0.096,0.096);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#2CACDD").s().p("AhXC+QgZgMgQgQQgIgHAFgKIAbguQADgGAGgBQAFAAAGADQATAOANAGQAZAMAYAAQAQAAALgKQALgJAAgQQAAgRgPgOQgOgMgdgOQg1gbgXgUQgjghAAguQAAgvAhgfQAlglA/ABQA+gBA7AsQAFACABAHQAAAGgCADIgeAsQgDAFgHACQgHACgIgFQgtgfggAAQgRAAgJAKQgJAIAAANQAAAOARANQANALAgAQQA5AbAUARQAnAiAAA0QAAAvgkAiQgnAmg8AAQgwgBgngQg");
	this.shape_3.setTransform(-5.8,18.7,0.096,0.096);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#2CACDD").s().p("AgiDIQgEAAgDgCQgDgEAAgEIAAl7QAAgEADgDQADgDAEAAIBEAAQAEAAAEADQADADAAAEIAAF7QAAAEgDAEQgEACgEAAg");
	this.shape_4.setTransform(-10.8,18.7,0.096,0.096);

	this.shape_5 = new cjs.Shape();
	this.shape_5.graphics.f("#2CACDD").s().p("AgDDMQgGgBgEgGIiymBQgDgGAEgEQACgFAHABIBMAAQAHAAACAFIBfDRIACAAIBfjRQAEgFAGAAIBMAAQAGgBADAFQADAEgCAGIi0GBQgEAGgGABg");
	this.shape_5.setTransform(-16,18.7,0.096,0.096);

	this.shape_6 = new cjs.Shape();
	this.shape_6.graphics.f("#2CACDD").s().p("Ah2DIQgEAAgDgCQgDgEAAgEIAAl7QAAgEADgDQADgDAEAAIDtAAQAEAAADADQAEADAAAEIAAA/QAAAEgEAEQgDADgEAAIieAAIAABHICCAAQAEgBADAEQADAEABADIAAA+QgBAFgDADQgDADgEAAIiCAAIAABOICeAAQAEAAADACQAEAEAAAEIAAA/QAAAEgEAEQgDACgEAAg");
	this.shape_6.setTransform(-21.9,18.7,0.096,0.096);

	this.shape_7 = new cjs.Shape();
	this.shape_7.graphics.f("#2CACDD").s().p("AhrDIQgEAAgDgCQgEgEAAgEIAAl7QAAgEAEgDQADgDAEAAIBFAAQAEAAADADQADADAAAEIAAEyICIAAQAFAAADACQADAEAAAEIAAA/QAAAEgDAEQgDACgFAAg");
	this.shape_7.setTransform(-27.4,18.7,0.096,0.096);

	this.shape_8 = new cjs.Shape();
	this.shape_8.graphics.f("#2CACDD").s().p("Ah2DIQgEAAgDgCQgDgEgBgEIAAl7QABgEADgDQADgDAEAAIDtAAQAEAAADADQAEADAAAEIAAA/QAAAEgEAEQgDADgEAAIieAAIAABHICCAAQAEgBADAEQAEAEAAADIAAA+QAAAFgEADQgDADgEAAIiCAAIAABOICeAAQAEAAADACQAEAEAAAEIAAA/QAAAEgEAEQgDACgEAAg");
	this.shape_8.setTransform(-33,18.7,0.096,0.096);

	this.shape_9 = new cjs.Shape();
	this.shape_9.graphics.f("#2CACDD").s().p("AghDIQgFAAgDgCQgDgEAAgEIAAkxIhSAAQgFAAgDgDQgDgEAAgEIAAg/QAAgEADgDQADgDAFAAID9AAQAFAAADADQADADAAAEIAAA/QAAAEgDAEQgDADgFAAIhSAAIAAExQAAAEgDAEQgDACgFAAg");
	this.shape_9.setTransform(-38.7,18.7,0.096,0.096);

	this.shape_10 = new cjs.Shape();
	this.shape_10.graphics.f("#2CACDD").s().p("ADHCAIACjFIgCAAIhLDFIglAAIhIjGIgDAAIACDGIgpAAIAAj/IBCAAIBFDGIBIjGIBBAAIAAD/gAipCAIAAjaIhLAAIAAglIDBAAIAAAlIhLAAIAADag");
	this.shape_10.setTransform(38.5,-7,0.096,0.096);

	this.shape_11 = new cjs.Shape();
	this.shape_11.graphics.f("#2CACDD").s().p("AjrPLIAA+VIHXAAIAAeVg");
	this.shape_11.setTransform(-12.7,1.1,0.096,0.096,0,0,0,-0.3,-0.2);

	this.shape_12 = new cjs.Shape();
	this.shape_12.graphics.f("#2CACDD").s().p("ArwXeIAAmSIOCAAQDKAABpifQBpidAAkqIAAlRQhcCqimBiQi0BqjpAAQi6AAiohMQilhLh9iJQh+iLhFi2QhIi/AAjYQAAjYBIi+QBEi1B+iKQB8iHCihJQCnhLC3AAQD2AAC2BwQCnBnBiC7IgNlpIHTAAIAAexQAAHjjvEAQjlD2mmAIgAmKuZQiUCiAAEKQAAETCUClQCWClD7AAQEAAACailQCaimAAkSQAAkJiaijQibikj/AAQj6AAiXCkg");
	this.shape_12.setTransform(24,5.8,0.096,0.096);

	this.shape_13 = new cjs.Shape();
	this.shape_13.graphics.f("#2CACDD").s().p("AHFPgIAAxaQAAjThjhxQhmhzjJAAQjnAAiHCEQiJCFAADrIAAQdInTAAIAA+WIHTAAIgKFpQBai+CvhqQCthqDaAAQFIAADEDbQDKDgAAGFIAAR/g");
	this.shape_13.setTransform(2.5,0.9,0.096,0.096,0,0,0,-0.4,-0.2);

	this.shape_14 = new cjs.Shape();
	this.shape_14.graphics.f("#2CACDD").s().p("AjoXbMAAAgu1IHSAAMAAAAu1g");
	this.shape_14.setTransform(-21.3,-4,0.096,0.096,0,0,0,-0.9,-0.3);

	this.shape_15 = new cjs.Shape();
	this.shape_15.graphics.f("#2CACDD").s().p("AnuN6QjRhshsisIE/jeQCwD6FaAAQCtAABXg3QBTg1AAhkQAAg6gcgmQgbgkg7gdQgxgYhhgcIjUg8QkGhIiEhvQiziYAAkEQAAkXDLiaQC6iNEwAAQDaAAC0BVQCbBJB6CFIkRENQhLhXhfgwQhsg3h8AAQiDAAhHAvQhGAvAABWQAABnBiA1QBGAlEABCQEoBNCKBoQDMCZAAEUQABEPirCdQjCCymFAAQk3AAjxh7g");
	this.shape_15.setTransform(-34.7,1.1,0.096,0.096,0,0,0,-0.7,-0.2);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_15},{t:this.shape_14},{t:this.shape_13},{t:this.shape_12},{t:this.shape_11},{t:this.shape_10},{t:this.shape_9},{t:this.shape_8},{t:this.shape_7},{t:this.shape_6},{t:this.shape_5},{t:this.shape_4},{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(31));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-42.5,-20.1,83.4,40.8);


// stage content:
(lib._728x090 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// ctaPos
	this.ctaPos = new lib.Symbol9();
	this.ctaPos.parent = this;
	this.ctaPos.setTransform(550.3,48.1,1,1,0,0,0,0.2,-0.2);

	this.timeline.addTween(cjs.Tween.get(this.ctaPos).wait(1));

	// slingLogoPos
	this.slingLogoPos = new lib.slingLogo();
	this.slingLogoPos.parent = this;
	this.slingLogoPos.setTransform(633.3,24.4,0.903,0.903,0,0,0,-1.1,0);

	this.timeline.addTween(cjs.Tween.get(this.slingLogoPos).wait(1));

	// slingLogo
	this.slingLogo = new lib.slingLogo();
	this.slingLogo.parent = this;
	this.slingLogo.setTransform(633,45.5,0.903,0.903,0,0,0,-1.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.slingLogo).wait(1));

	// border
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#999999").s().p("Eg43AHCIAAuDMBxvAAAIAAODgEg4tAG4MBxbAAAIAAtvMhxbAAAg");
	this.shape.setTransform(364,45);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	// txtFinal
	this.txtFinal = new lib.watchSports();
	this.txtFinal.parent = this;
	this.txtFinal.setTransform(268.3,31.1,0.779,0.779,0,0,0,121.5,32);

	this.timeline.addTween(cjs.Tween.get(this.txtFinal).wait(1));

	// bluePanel2Pos
	this.bluePanel2Pos = new lib.bluePanel();
	this.bluePanel2Pos.parent = this;
	this.bluePanel2Pos.setTransform(-17.6,0.1,1.229,0.36,0,0,0,1.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.bluePanel2Pos).wait(1));

	// bluePanel2
	this.bluePanel2 = new lib.bluePanel();
	this.bluePanel2.parent = this;
	this.bluePanel2.setTransform(-17.6,0.1,1.229,0.36,0,0,0,1.1,0.1);

	this.timeline.addTween(cjs.Tween.get(this.bluePanel2).wait(1));

	// txtCarousel
	this.txtCarousel = new lib.congrats();
	this.txtCarousel.parent = this;
	this.txtCarousel.setTransform(199.9,28,0.591,0.591,0,0,0,230,48.9);

	this.timeline.addTween(cjs.Tween.get(this.txtCarousel).wait(1));

	// bluePanelPos
	this.bluePanelPos = new lib.bluePanel();
	this.bluePanelPos.parent = this;
	this.bluePanelPos.setTransform(0.8,0,0.661,0.36,0,0,0,1.1,0);

	this.timeline.addTween(cjs.Tween.get(this.bluePanelPos).wait(1));

	// bluePanel
	this.bluePanel = new lib.bluePanel();
	this.bluePanel.parent = this;
	this.bluePanel.setTransform(0.8,0,0.661,0.36,0,0,0,1.1,0);

	this.timeline.addTween(cjs.Tween.get(this.bluePanel).wait(1));

	// txtStart
	this.txtStart = new lib.congrats2();
	this.txtStart.parent = this;
	this.txtStart.setTransform(303.9,36.8,1.432,1.432,0,0,0,193.6,64.5);

	this.timeline.addTween(cjs.Tween.get(this.txtStart).wait(1));

	// pricePos
	this.pricePos = new lib.pricePos();
	this.pricePos.parent = this;
	this.pricePos.setTransform(89.6,62.1,1.247,1,0,0,0,0.8,0.2);
	this.pricePos.alpha = 0.16;

	this.timeline.addTween(cjs.Tween.get(this.pricePos).wait(1));

	// showInfoFlexBoxPos
	this.showInfoFlexBoxPos = new lib.showInfoFlexBoxPos();
	this.showInfoFlexBoxPos.parent = this;
	this.showInfoFlexBoxPos.setTransform(57,47,1,1,0,0,0,0,0.1);
	this.showInfoFlexBoxPos.alpha = 0.371;

	this.timeline.addTween(cjs.Tween.get(this.showInfoFlexBoxPos).wait(1));

	// showTitlePos
	this.showTitlePos = new lib.Symbol7();
	this.showTitlePos.parent = this;
	this.showTitlePos.setTransform(17.4,39.4,1,1,0,0,0,0,0.1);
	this.showTitlePos.alpha = 0.41;
	this.showTitlePos.filters = [new cjs.ColorFilter(0.98828125, 0.23046875, 1, 1, 0, 0, 0, 0)];
	this.showTitlePos.cache(-2,-2,304,14);

	this.timeline.addTween(cjs.Tween.get(this.showTitlePos).wait(1));

	// networkLogoPos
	this.networkLogoPos = new lib.progLogoPos();
	this.networkLogoPos.parent = this;
	this.networkLogoPos.setTransform(17.4,49.1,1,1.139,0,0,0,0,0.3);
	this.networkLogoPos.alpha = 0.172;

	this.timeline.addTween(cjs.Tween.get(this.networkLogoPos).wait(1));

	// ptBpos
	this.ptBpos = new lib.ptBpos();
	this.ptBpos.parent = this;
	this.ptBpos.setTransform(370,0);

	this.timeline.addTween(cjs.Tween.get(this.ptBpos).wait(1));

	// ptBscale
	this.ptBscale = new lib.ptBscale();
	this.ptBscale.parent = this;
	this.ptBscale.setTransform(370.6,0.6,1.017,1.017,0,0,0,0.6,0.6);

	this.timeline.addTween(cjs.Tween.get(this.ptBscale).wait(1));

	// ptC
	this.ptC = new lib.ptC();
	this.ptC.parent = this;
	this.ptC.setTransform(369.9,-91.5,1,1,0,0,0,-0.1,-0.1);

	this.timeline.addTween(cjs.Tween.get(this.ptC).wait(1));

	// ptA
	this.ptA = new lib.ptA();
	this.ptA.parent = this;
	this.ptA.setTransform(369.9,91.6,1,1,0,0,0,-0.1,-0.1);

	this.timeline.addTween(cjs.Tween.get(this.ptA).wait(1));

	// ref
	this.bgGrad = new lib.Symbol20();
	this.bgGrad.parent = this;
	this.bgGrad.setTransform(453.6,75.6,0.884,0.299,0,0,0,134,66.8);
	this.bgGrad.alpha = 0;

	this.timeline.addTween(cjs.Tween.get(this.bgGrad).wait(1));

	// bg black
	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("Eg43AHCIAAuDMBxvAAAIAAODg");
	this.shape_1.setTransform(364,45);

	this.timeline.addTween(cjs.Tween.get(this.shape_1).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(345,-46.4,747,273.1);
// library properties:
lib.properties = {
	width: 728,
	height: 90,
	fps: 30,
	color: "#FFFFFF",
	opacity: 1.00,
	webfonts: {},
	manifest: [],
	preloads: []
};




})(lib = lib||{}, images = images||{}, createjs = createjs||{}, ss = ss||{}, AdobeAn = AdobeAn||{});
var lib, images, createjs, ss, AdobeAn;