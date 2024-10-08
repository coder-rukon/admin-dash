import type { ISizeColumnsToFitParams } from '../columns/columnSizeService';
import { BeanStub } from '../context/beanStub';
import type { BeanCollection } from '../context/context';
import type { LayoutView } from '../styling/layoutFeature';
import { GridBodyScrollFeature } from './gridBodyScrollFeature';
import { RowDragFeature } from './rowDragFeature';
export type RowAnimationCssClasses = 'ag-row-animation' | 'ag-row-no-animation';
export declare const CSS_CLASS_FORCE_VERTICAL_SCROLL = "ag-force-vertical-scroll";
export interface IGridBodyComp extends LayoutView {
    setColumnMovingCss(cssClass: string, on: boolean): void;
    setCellSelectableCss(cssClass: string | null, on: boolean): void;
    setTopHeight(height: number): void;
    setTopDisplay(display: string): void;
    setBottomHeight(height: number): void;
    setBottomDisplay(display: string): void;
    setStickyTopHeight(height: string): void;
    setStickyTopTop(offsetTop: string): void;
    setStickyTopWidth(width: string): void;
    setStickyBottomHeight(height: string): void;
    setStickyBottomBottom(offsetBottom: string): void;
    setStickyBottomWidth(width: string): void;
    setColumnCount(count: number): void;
    setRowCount(count: number): void;
    setRowAnimationCssOnBodyViewport(cssClass: RowAnimationCssClasses, animate: boolean): void;
    setAlwaysVerticalScrollClass(cssClass: string | null, on: boolean): void;
    setPinnedTopBottomOverflowY(overflow: 'scroll' | 'hidden'): void;
    registerBodyViewportResizeListener(listener: () => void): void;
    setBodyViewportWidth(width: string): void;
}
export declare class GridBodyCtrl extends BeanStub {
    private animationFrameService;
    private rowContainerHeightService;
    private ctrlsService;
    private columnModel;
    private columnSizeService;
    private scrollVisibleService;
    private menuService;
    private headerNavigationService;
    private dragAndDropService;
    private pinnedRowModel;
    private rowRenderer;
    private popupService;
    private mouseEventService;
    private rowModel;
    private filterManager?;
    private environment;
    wireBeans(beans: BeanCollection): void;
    private comp;
    private eGridBody;
    private eBodyViewport;
    private eTop;
    private eBottom;
    private eStickyTop;
    private stickyTopHeight;
    private eStickyBottom;
    private stickyBottomHeight;
    private bodyScrollFeature;
    private rowDragFeature;
    getScrollFeature(): GridBodyScrollFeature;
    getBodyViewportElement(): HTMLElement;
    setComp(comp: IGridBodyComp, eGridBody: HTMLElement, eBodyViewport: HTMLElement, eTop: HTMLElement, eBottom: HTMLElement, eStickyTop: HTMLElement, eStickyBottom: HTMLElement): void;
    getComp(): IGridBodyComp;
    private addEventListeners;
    private addFocusListeners;
    setColumnMovingCss(moving: boolean): void;
    setCellTextSelection(selectable?: boolean): void;
    private onScrollVisibilityChanged;
    private onGridColumnsChanged;
    private disableBrowserDragging;
    private addStopEditingWhenGridLosesFocus;
    updateRowCount(): void;
    registerBodyViewportResizeListener(listener: () => void): void;
    setVerticalScrollPaddingVisible(visible: boolean): void;
    isVerticalScrollShowing(): boolean;
    private setupRowAnimationCssClass;
    getGridBodyElement(): HTMLElement;
    private addBodyViewportListener;
    private addFullWidthContainerWheelListener;
    private onFullWidthContainerWheel;
    private onBodyViewportContextMenu;
    private mockContextMenuForIPad;
    private onBodyViewportWheel;
    private onStickyWheel;
    getGui(): HTMLElement;
    scrollVertically(pixels: number): number;
    private addRowDragListener;
    getRowDragFeature(): RowDragFeature;
    private setFloatingHeights;
    setStickyTopHeight(height?: number): void;
    getStickyTopHeight(): number;
    setStickyBottomHeight(height?: number): void;
    getStickyBottomHeight(): number;
    private setStickyWidth;
    private onHeaderHeightChanged;
    private setStickyTopOffsetTop;
    private setStickyBottomOffsetBottom;
    sizeColumnsToFit(params?: ISizeColumnsToFitParams, nextTimeout?: number): void;
    addScrollEventListener(listener: () => void): void;
    removeScrollEventListener(listener: () => void): void;
}
