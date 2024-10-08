import { Component } from '../../../widgets/component';
import type { AbstractHeaderCellCtrl } from './abstractHeaderCellCtrl';
export declare abstract class AbstractHeaderCellComp<T extends AbstractHeaderCellCtrl> extends Component {
    protected ctrl: T;
    constructor(template: string, ctrl: T);
    getCtrl(): T;
}
