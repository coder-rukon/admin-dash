import type { NamedBean } from './context/bean';
import { BeanStub } from './context/beanStub';
import type { BeanCollection } from './context/context';
export declare class Environment extends BeanStub implements NamedBean {
    beanName: "environment";
    private resizeObserverService;
    private eGridDiv;
    wireBeans(beans: BeanCollection): void;
    private sizeEls;
    private lastKnownValues;
    private themeClasses;
    private eThemeAncestor;
    private eMeasurementContainer;
    private sizesMeasured;
    postConstruct(): void;
    getDefaultRowHeight(): number;
    getDefaultHeaderHeight(): number;
    getDefaultListItemHeight(): number;
    hasMeasuredSizes(): boolean;
    getThemeClasses(): readonly string[];
    applyThemeClasses(el: HTMLElement): void;
    getThemeAncestorElement(): HTMLElement | null;
    refreshRowHeightVariable(): number;
    private getCSSVariablePixelValue;
    private measureSizeEl;
    private getSizeEl;
    private fireGridStylesChangedEvent;
    private setUpThemeClassObservers;
    private getAncestorThemeClasses;
}
