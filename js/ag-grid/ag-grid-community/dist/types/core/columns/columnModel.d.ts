import type { NamedBean } from '../context/bean';
import { BeanStub } from '../context/beanStub';
import type { BeanCollection } from '../context/context';
import type { AgColumn } from '../entities/agColumn';
import type { AgProvidedColumnGroup } from '../entities/agProvidedColumnGroup';
import type { ColDef, ColGroupDef } from '../entities/colDef';
import type { ColumnEventType } from '../events';
import type { PropertyChangedSource } from '../gridOptionsService';
import type { Column, ColumnPinnedType } from '../interfaces/iColumn';
export type ColKey<TData = any, TValue = any> = string | ColDef<TData, TValue> | Column<TValue>;
export type Maybe<T> = T | null | undefined;
export interface ColumnCollections {
    tree: (AgColumn | AgProvidedColumnGroup)[];
    treeDepth: number;
    list: AgColumn[];
    map: {
        [id: string]: AgColumn;
    };
}
export declare class ColumnModel extends BeanStub implements NamedBean {
    beanName: "columnModel";
    private context;
    private columnFactory;
    private columnSizeService;
    private visibleColsService;
    private columnViewportService;
    private pivotResultColsService;
    private columnAnimationService;
    private autoColService?;
    private valueCache;
    private columnDefFactory;
    private columnApplyStateService;
    private columnGroupStateService;
    private eventDispatcher;
    private columnMoveService;
    private columnAutosizeService;
    private funcColsService;
    private quickFilterService?;
    private showRowGroupColsService?;
    private environment;
    wireBeans(beans: BeanCollection): void;
    private colDefs;
    private colDefCols;
    private autoCols;
    private cols;
    private pivotMode;
    private showingPivotResult;
    private lastOrder;
    private lastPivotOrder;
    private colSpanActive;
    private autoHeightActive;
    private autoHeightActiveAtLeastOnce;
    private ready;
    private changeEventsDispatching;
    private shouldQueueResizeOperations;
    private resizeOperationQueue;
    postConstruct(): void;
    private createColsFromColDefs;
    refreshCols(): void;
    private selectCols;
    getColsToShow(): AgColumn[];
    private addAutoCols;
    private createAutoCols;
    private refreshAll;
    setColsVisible(keys: (string | AgColumn)[], visible: boolean | undefined, source: ColumnEventType): void;
    setColsPinned(keys: Maybe<ColKey>[], pinned: ColumnPinnedType, source: ColumnEventType): void;
    setColumnGroupOpened(key: AgProvidedColumnGroup | string | null, newValue: boolean, source: ColumnEventType): void;
    getProvidedColGroup(key: string): AgProvidedColumnGroup | null;
    isColGroupLocked(column: AgColumn): boolean;
    isSuppressAutoCol(): boolean;
    private setAutoHeightActive;
    private restoreColOrder;
    private orderColsLikeColDefCols;
    sortColsLikeKeys(colIds: string[]): void;
    sortColsLikeCols(cols: AgColumn[]): void;
    resetColDefIntoCol(column: AgColumn, source: ColumnEventType): boolean;
    queueResizeOperations(): void;
    isShouldQueueResizeOperations(): boolean;
    processResizeOperations(): void;
    pushResizeOperation(func: () => void): void;
    moveInCols(movedColumns: AgColumn[], toIndex: number, source: ColumnEventType): void;
    private positionLockedCols;
    private saveColOrder;
    getColumnDefs(): (ColDef | ColGroupDef)[] | undefined;
    isShowingPivotResult(): boolean;
    isChangeEventsDispatching(): boolean;
    isColSpanActive(): boolean;
    isProvidedColGroupsPresent(): boolean;
    private setColSpanActive;
    isAutoRowHeightActive(): boolean;
    wasAutoRowHeightEverActive(): boolean;
    getHeaderRowCount(): number;
    isReady(): boolean;
    isPivotMode(): boolean;
    private setPivotMode;
    private isPivotSettingAllowed;
    isPivotActive(): boolean;
    recreateColumnDefs(source: ColumnEventType): void;
    setColumnDefs(columnDefs: (ColDef | ColGroupDef)[], source: ColumnEventType): void;
    destroy(): void;
    getColTree(): (AgColumn | AgProvidedColumnGroup)[];
    getColDefColTree(): (AgColumn | AgProvidedColumnGroup)[];
    getColDefCols(): AgColumn[] | null;
    getCols(): AgColumn[];
    getAllCols(): AgColumn[];
    getColsForKeys(keys: ColKey[]): AgColumn[];
    getColDefCol(key: ColKey): AgColumn | null;
    getCol(key: Maybe<ColKey>): AgColumn | null;
    getColFromCollection(key: ColKey, cols: ColumnCollections): AgColumn | null;
    getAutoCol(key: ColKey): AgColumn | null;
    getAutoCols(): AgColumn[] | null;
    setColHeaderHeight(col: AgColumn, height: number): void;
    getColumnGroupHeaderRowHeight(): number;
    getColumnHeaderRowHeight(): number;
    getHeaderHeight(): number;
    getFloatingFiltersHeight(): number;
    getGroupHeaderHeight(): number;
    private getPivotHeaderHeight;
    getPivotGroupHeaderHeight(): number;
    private onFirstDataRendered;
    private onAutoGroupColumnDefChanged;
}
export declare function convertSourceType(source: PropertyChangedSource): ColumnEventType;
