import type { NamedBean } from './context/bean';
import { BeanStub } from './context/beanStub';
import type { BeanCollection } from './context/context';
import type { AgColumn } from './entities/agColumn';
import type { AgColumnGroup } from './entities/agColumnGroup';
import type { CellPosition } from './entities/cellPositionUtils';
import type { RowNode } from './entities/rowNode';
import type { CellFocusedParams } from './events';
import type { HeaderCellCtrl } from './headerRendering/cells/column/headerCellCtrl';
import type { HeaderPosition } from './headerRendering/common/headerPosition';
import type { TabToNextHeaderParams } from './interfaces/iCallbackParams';
import type { WithoutGridCommon } from './interfaces/iCommon';
import type { FocusableContainer } from './interfaces/iFocusableContainer';
import type { RowPinnedType } from './interfaces/iRowNode';
export declare class FocusService extends BeanStub implements NamedBean {
    beanName: "focusService";
    private eGridDiv;
    private columnModel;
    private visibleColsService;
    private headerNavigationService;
    private headerPositionUtils;
    private rowRenderer;
    private rowPositionUtils;
    private cellPositionUtils;
    private navigationService;
    private ctrlsService;
    private filterManager?;
    private rangeService?;
    private advancedFilterService?;
    wireBeans(beans: BeanCollection): void;
    private gridCtrl;
    private focusedCellPosition;
    private restoredFocusedCellPosition;
    private focusedHeaderPosition;
    /** the column that had focus before it moved into the advanced filter */
    private advancedFilterFocusColumn;
    private static keyboardModeActive;
    private static instanceCount;
    private static addKeyboardModeEvents;
    private static removeKeyboardModeEvents;
    private static toggleKeyboardMode;
    private static unregisterGridCompController;
    postConstruct(): void;
    private registerKeyboardFocusEvents;
    onColumnEverythingChanged(): void;
    isKeyboardMode(): boolean;
    getFocusCellToUseAfterRefresh(): CellPosition | null;
    getFocusHeaderToUseAfterRefresh(): HeaderPosition | null;
    private isDomDataMissingInHierarchy;
    getFocusedCell(): CellPosition | null;
    shouldRestoreFocus(cell: CellPosition): boolean;
    private isCellRestoreFocused;
    setRestoreFocusedCell(cellPosition: CellPosition): void;
    private getFocusEventParams;
    clearFocusedCell(): void;
    setFocusedCell(params: CellFocusedParams): void;
    isCellFocused(cellPosition: CellPosition): boolean;
    isRowNodeFocused(rowNode: RowNode): boolean;
    isHeaderWrapperFocused(headerCtrl: HeaderCellCtrl): boolean;
    clearFocusedHeader(): void;
    getFocusedHeader(): HeaderPosition | null;
    setFocusedHeader(headerRowIndex: number, column: AgColumnGroup | AgColumn): void;
    focusHeaderPosition(params: {
        headerPosition: HeaderPosition | null;
        direction?: 'Before' | 'After' | null;
        fromTab?: boolean;
        allowUserOverride?: boolean;
        event?: KeyboardEvent;
        fromCell?: boolean;
        rowWithoutSpanValue?: number;
    }): boolean;
    focusHeaderPositionFromUserFunc(params: {
        userFunc: (params: WithoutGridCommon<TabToNextHeaderParams>) => boolean | HeaderPosition | null;
        headerPosition: HeaderPosition | null;
        direction?: 'Before' | 'After' | null;
        event?: KeyboardEvent;
    }): boolean;
    private getHeaderPositionFromUserFunc;
    private focusProvidedHeaderPosition;
    focusFirstHeader(): boolean;
    focusLastHeader(event?: KeyboardEvent): boolean;
    focusPreviousFromFirstCell(event?: KeyboardEvent): boolean;
    isAnyCellFocused(): boolean;
    isRowFocused(rowIndex: number, rowPinnedType: RowPinnedType): boolean;
    findFocusableElements(rootNode: HTMLElement, exclude?: string | null, onlyUnmanaged?: boolean): HTMLElement[];
    focusInto(rootNode: HTMLElement, up?: boolean, onlyUnmanaged?: boolean): boolean;
    findFocusableElementBeforeTabGuard(rootNode: HTMLElement, referenceElement?: HTMLElement): HTMLElement | null;
    findNextFocusableElement(rootNode?: HTMLElement, onlyManaged?: boolean | null, backwards?: boolean): HTMLElement | null;
    isTargetUnderManagedComponent(rootNode: HTMLElement, target?: HTMLElement): boolean;
    findTabbableParent(node: HTMLElement | null, limit?: number): HTMLElement | null;
    focusGridView(column?: AgColumn, backwards?: boolean): boolean;
    focusNextGridCoreContainer(backwards: boolean, forceOut?: boolean): boolean;
    private focusAdvancedFilter;
    focusNextFromAdvancedFilter(backwards?: boolean, forceFirstColumn?: boolean): boolean;
    clearAdvancedFilterColumn(): void;
    addFocusableContainer(container: FocusableContainer): void;
    removeFocusableContainer(container: FocusableContainer): void;
    focusGridInnerElement(fromBottom?: boolean): boolean;
}
